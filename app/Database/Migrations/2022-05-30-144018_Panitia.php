<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Panitia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],

            'nama_panitia'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => false
            ],

            'jabatan'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
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
        $this->forge->createTable('panitia');
    }

    public function down()
    {
        $this->forge->dropTable('panitia');
    }
}
