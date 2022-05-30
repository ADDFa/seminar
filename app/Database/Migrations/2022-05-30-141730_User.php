<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'         => 11,
                'auto_increment'    => true
            ],

            'username'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => false
            ],

            'password'  => [
                'type'              => 'VARCHAR',
                'constraint'         => '255',
                'null'              => false
            ],

            'role'      => [
                'type'              => 'CHAR',
                'default'           => 'u',         // u untuk user | a untuk admin
                'null'              => false
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
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
