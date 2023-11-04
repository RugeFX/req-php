<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Seminar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'dosen_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'=> true,
            ],
            'judul'=> [
                'type'=> 'VARCHAR',
                'constraint' => 100
            ],
            "deskripsi" => [
                "type"=> "TEXT",
            ],
            'jadwal' => [
                'type'       => 'datetime',
                'default'    => '0000-00-00 00:00:00',
            ],
            "status" => [
                'type' => 'ENUM("pending","accepted")',
                'default' => 'pending',
            ],
            'penyelenggara' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ])
        ->addKey('id', true)
        ->addForeignKey('dosen_id', 'dosen', 'id', '', 'CASCADE')
        ->addForeignKey('penyelenggara', 'user', 'id', '', 'CASCADE')
        ->createTable('seminar');
    }

    public function down()
    {
        $this->forge->dropTable('seminar');
    }
}
