<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dosen;
use App\Models\User;

class AuthController extends BaseController
{
    public function signup()
    {
        helper(['form']);

        if($this->request->getMethod() == 'get') {
            return view('signup');
        }

        $rules = [
            'name'              => 'required|min_length[4]|max_length[100]',
            'username'          => 'required|min_length[4]|max_length[100]|is_unique[user.username]',
            'password'          => 'required|min_length[4]|max_length[50]',
            'confirm-password'  => 'matches[password]',
            'nim'               => 'required|numeric|min_length[5]|max_length[12]',
            'role'              => 'required',
        ];

        if($this->validate($rules)){
            $user_model = new User();
            $data = [
                'name'              => $this->request->getVar('name'),
                'username'          => $this->request->getVar('username'),
                'password'          => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'nim'               => $this->request->getVar('nim'),
                'role'              => $this->request->getVar('role'),
                'status'            => 1,
                'riwayat_sidang'    => 0,
            ];
            $user_model->save($data);
            return redirect()->to('signin');
        }else{
            return view('signup', ["validation" => $this->validator]);
        }
    }

    public function signin() {
        helper(["form"]);

        if($this->request->getMethod() == 'get') {
            return view('signin');
        }

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if(!$this->validate($rules)){
            return view('/signin', ["validation" => $this->validator]);
        }

        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $model = null;

        if($this->request->getVar("user") != null){
            $model = new User();
        }else if($this->request->getVar("dosen") != null){
            $model = new Dosen();
        }else{
            return redirect()->to('/signin')->with('error', ['role' => 'Role tidak ditemukan.']);
        }

        $data = $model->where('username', $username)->first();
            
        if(!$data){
            return redirect()->to('/signin')->with('error', ['username' => 'Username tidak ditemukan.']);
        }

        $pass = $data['password'];
        $verifyPassword = password_verify($password, $pass);

        if(!$verifyPassword){
            return redirect()->to('/signin')->with('error', ['password' => 'Password salah.']);
        }

        $ses_data = isset($data["nim"]) ? [
            'id' => $data['id'],
            'name' => $data['name'],
            'username' => $data['username'],
            'nim' => $data['nim'],
            'role' => $data['role'],
            'isLoggedIn' => true
        ] : [
            'id' => $data['id'],
            'name' => $data['name'],
            'username' => $data['username'],
            'role' => "dosen",
            'isLoggedIn' => true
        ];
        $session->set("user_info", $ses_data);

        return redirect()->to('/dashboard');
    }

    public function logout() {
        session()->remove("user_info");
        session()->destroy();

        return redirect()->to("/");
    }

    public function testPw() {
        return password_hash("dosen123", PASSWORD_DEFAULT);
    }
}
