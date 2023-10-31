<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('guest', ["user_info" => session()->get("user_info")]);
    }

    public function test() 
    {
        $userModel = model('User');
        $firstData = $userModel->findAll();
        return json_encode($firstData);
    }
}
