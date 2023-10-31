<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountsSeeder extends Seeder
{
    public function run()
    {
        $admin = [
            "name" => "Mas Admin",
            'username' => 'AdminA',
            'nim' => null,
            'password'    => password_hash("admin123", PASSWORD_DEFAULT),
            "role"=> "admin",
            "status"=> 1,
            "riwayat_sidang"=> 0,
        ];

        $this->db->table('user')->insert($admin);

        $participant = [
            "name" => "Abdul John",
            'username' => 'JohnAbd',
            'nim' => 1234567890,
            'password'    => password_hash("abdul123", PASSWORD_DEFAULT),
            "role"=> "participant",
            "status"=> 1,
            "riwayat_sidang"=> 0,
        ];

        $this->db->table('user')->insert($participant);

        $presenter = [
            "name" => "Ahmad Joni",
            'username' => 'JoniA',
            'nim' => 1234567891,
            'password'    => password_hash("ahmad123", PASSWORD_DEFAULT),
            "role"=> "presenter",
            "status"=> 1,
            "riwayat_sidang"=> 0,
        ];

        $this->db->table('user')->insert($presenter);

        $dosen = [
            "name" => "Junaedi",
            "username"=> "Jundi123",
            "password" => password_hash("junaedi123", PASSWORD_DEFAULT),
        ];

        $this->db->table("dosen")->insert($dosen);
    }
}
