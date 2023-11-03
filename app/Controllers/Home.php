<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('guest');
    }

    public function test() 
    {
        $userModel = model('User');
        $firstData = $userModel->findAll();
        return json_encode($firstData);
    }

    public function dashboard()
    {
        $db = \Config\Database::connect();
        $riwayat_sidang = $db
        ->table("user")
        ->select('riwayat_sidang')
        ->where('id',session()->get("user_info")["id"])
        ->get()
        ->getResult()[0]
        ->riwayat_sidang;

        $builder = $db->table('seminar');
        $query = $builder
        ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
        ->join("user", "user.id = seminar.penyelenggara")
        ->join("dosen", "dosen.id = seminar.dosen_id")
        ->orderBy("seminar.jadwal","DESC")
        ->limit(5)
        ->get();

        return view("dashboard", ["seminars" => $query->getResult(), "riwayat_sidang" => $riwayat_sidang]);
    }
    
    private function get_all_seminars(?int $limit = null): ?array {
        $query = $this->builder
            ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id");

        if ($limit) {
            $query = $query->limit($limit);
        }

        $query = $query->get();

        return $query->getResult();
    }
}
