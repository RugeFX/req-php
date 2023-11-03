<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeminarSeeder extends Seeder
{
    public function run()
    {
        $seminar = [
            "dosen_id" => 1,
            "judul" => "Seminar Test",
            "deskripsi" => "Ini adalah tes seminar pertama.",
            "jadwal" => date('Y-m-d H:i:s'),
            "penyelenggara" => 3
        ];

        $this->db->table('seminar')->insert($seminar);
    }
}
