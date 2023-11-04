<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SeminarController extends BaseController
{
    protected $db;
    protected $builder;
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('seminar');
    }

    public function daftar_seminar()
    {
        $role = session()->get("user_info")["role"];
        $result = $this->get_all_seminars(null, $role === "dosen");

        return view("daftar-seminar", ["seminars" => $result]);
    }

    public function info_seminar($id_seminar)
    {
        $result = $this->get_seminar($id_seminar);

        $id_user = session()->get("user_info")["id"];
        $joined = $this->check_joined_seminar($id_seminar, $id_user);

        $participants = $this->db->table("seminar_participants")
        ->select("user.name")
        ->join("user", "seminar_participants.participant = user.id")
        ->where("seminar_participants.seminar_id", $id_seminar)
        ->get();

        return view("info-seminar", [
            "seminar" => $result ? $result[0] : NULL, 
            "joined" => $joined,
            "participants" => $participants->getResult()
        ]);
    }

    public function riwayat_seminar()
    {
        $id_user = session()->get("user_info")["id"];
        $result = $this->get_riwayat_seminar($id_user);

        return view("riwayat-seminar", ["riwayat" => $result]);
    }

    public function participate_seminar()
    {
        $id_user = session()->get("user_info")["id"];

        $id_seminar = $this->request->getVar("seminar_id");
        if(!$id_seminar) return redirect()->back();

        $exists = $this->builder->where("id", $id_seminar)->get()->getResult('array');
        if(count($exists) < 1) return redirect()->back();

        $already_joined = $this->check_joined_seminar($id_seminar, $id_user);
        if($already_joined) return redirect()->back();

        $join= $this->join_seminar($id_seminar, $id_user);

        return redirect()->to("info-seminar/".$id_seminar)->with("join_seminar", ($join[0] && $join[1]) ? "success" : "failed");
    }

    public function buat_seminar()
    {
        if($this->request->getMethod() === "get"){
            return view("buat-seminar");
        }
        if($this->request->getMethod() !== "post"){
            return redirect()->to("/");
        }
        
        $data = [
            "penyelenggara" => session()->get("user_info")["id"],
            "judul" => $this->request->getVar("judul"),
            "deskripsi"=> $this->request->getVar("deskripsi"),
            "jadwal"=> date("Y-m-d H:i:s", strtotime($this->request->getVar("jadwal"))),
        ];
        
        $add = $this->builder->insert($data);

        return redirect()->to("buat-seminar")->with("status", $add ? "success" : "failed");
    }

    public function accept_seminar()
    {
        $id_dosen = session()->get("user_info")["id"];
        $id_seminar = $this->request->getVar("seminar_id");

        $accept = $this->builder
        ->where("id", $id_seminar)
        ->set("dosen_id", $id_dosen)
        ->set("status", "accepted")
        ->update();

        return redirect()->to("info-seminar/".$id_seminar)->with("accept_seminar", $accept ? "success" : "failed");
    }

    private function get_seminar($id_seminar): ?array {
        $query = $this->builder
            ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id", "left")
            ->where("seminar.id", $id_seminar)
            ->get();

        return $query->getResult();
    }

    private function get_all_seminars(?int $limit = null, ?bool $dosen = false): ?array {
        $queryString = "seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name";
        $query = $this->builder
            ->select($queryString)
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id", "left");

        if(!$dosen) {
            $query = $query->where("seminar.status", "accepted");
        }else{
            $query = $query->where("seminar.status", "pending");
        }

        if ($limit) {
            $query = $query->limit($limit);
        }

        $query = $query->get();

        return $query->getResult();
    }
    
    private function get_riwayat_seminar($id_user): ?array {
        $query = $this->builder
            ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id")
            ->join("seminar_participants", "seminar_participants.seminar_id = seminar.id")
            ->where("seminar_participants.participant", $id_user)
            ->get();

        return $query->getResult();
    }

    private function join_seminar($id_seminar, $id_user) {
        $update_user = $this->db->table("user")->set("riwayat_sidang", "riwayat_sidang+1", false)->where("id", $id_user)->update();
        $add_anchor = $this->db->table("seminar_participants")->insert([
            "seminar_id" => $id_seminar,
            "participant" => $id_user
        ]);
        return [$update_user, $add_anchor];
    }

    private function check_joined_seminar($id_seminar, $id_user) {
        $query = $this->db->table("seminar_participants")
        ->select("id")
        ->where("participant", $id_user)
        ->where("seminar_id", $id_seminar)
        ->get();
        
        return count($query->getResult()) > 0;
    }
}