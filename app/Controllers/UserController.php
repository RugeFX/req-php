<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function getUsers() {
        $model = model(User::class);
        $data = $model->findAll();

        $this->response->setHeader("Content-type", "application/json");
        return json_encode($data);
    }
}
