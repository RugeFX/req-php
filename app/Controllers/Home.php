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
        return view("dashboard", ["user_info" => session()->get("user_info")]);
    }
}
