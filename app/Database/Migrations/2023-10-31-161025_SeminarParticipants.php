<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SeminarParticipants extends Migration
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
            'seminar_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'penyelenggara' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ])
        ->addKey('id', true)
        ->addForeignKey('seminar_id', 'seminar', 'id', '', 'CASCADE')
        ->addForeignKey('penyelenggara', 'user', 'id', '', 'CASCADE')
        ->createTable('seminar_participants');
    }

    public function down()
    {
        $this->forge->dropTable('seminar_participants');
    }
}
