<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'role'=> [
                'type' => 'ENUM("participant","presenter")',
                'default' => 'participant',
                'null' => false,
            ],
            'nim' => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'status' => [
                'type'=> 'BOOL',
            ],
            'riwayat_sidang' => [
                'type'=> 'INT',
            ],
        ])
        ->addKey('id', true)
        ->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
        
    }
}
