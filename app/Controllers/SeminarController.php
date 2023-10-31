<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Seminar;

class SeminarController extends BaseController
{
    public function daftar_seminar()
    {
        return view("daftar-seminar", ["user_info" => session()->get("user_info")]);
    }

    public function info_seminar($id_seminar)
    {
        $seminar = new Seminar();
        $data = $seminar->find($id_seminar);
        return view("info-seminar", ["seminar-info" => $data]);
    }
}
