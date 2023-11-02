<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SeminarController extends BaseController
{
    protected $builder;
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        $db = \Config\Database::connect();
        $this->builder = $db->table('seminar');
    }
    
    public function daftar_seminar()
    {
        $query = $this->builder
            ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id")
            ->get();

        return view("daftar-seminar", ["seminars" => $query->getResult()]);
    }

    public function info_seminar($id_seminar)
    {
        $query = $this->builder
            ->select("seminar.*, user.username AS penyelenggara_username, user.name AS penyelenggara_name, dosen.username AS dosen_username, dosen.name AS dosen_name")
            ->join("user", "user.id = seminar.penyelenggara")
            ->join("dosen", "dosen.id = seminar.dosen_id")
            ->where("seminar.id", $id_seminar)
            ->get();
        $result = $query->getResult();

        return view("info-seminar", ["seminar" => $result ? $result[0] : NULL]);
    }
}
