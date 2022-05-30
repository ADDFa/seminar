<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paper extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'auto_increment'        => true
            ],

            'nama_file'         => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255',
                'null'                  => false
            ],

            'path'              => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255',
                'null'                  => false
            ],

            'judul'             => [
                'type'                  => 'TEXT',
                'null'                  => false
            ],

            'abstrak'           => [
                'type'                  => 'TEXT',
                'null'                  => false
            ],

            'id_user'           => [
                'type'                  => 'INT',
                'constraint'            => 11
            ],

            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true
            ],

            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('paper');
    }

    public function down()
    {
        $this->forge->dropTable('paper');
    }
}
