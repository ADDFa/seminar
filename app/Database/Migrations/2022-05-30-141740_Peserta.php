<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peserta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'auto_increment'        => true
            ],

            'nama'              => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255',
                'null'                  => false
            ],

            'instansi'          => [
                'type'                  => 'VARCHAR',
                'constraint'            => '255',
                'null'                  => false
            ],

            'email'             => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
            ],

            'no_telp'           => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
            ],

            'kota'              => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
            ],

            'negara'            => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
            ],

            'jenis_kelamin'     => [
                'type'                  => 'CHAR', // P untuk Pria | W untuk Wanita
                'null'                  => true
            ],

            'status'            => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => true
            ],

            'id_user'            => [
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
        $this->forge->createTable('peserta');
    }

    public function down()
    {
        $this->forge->dropTable('peserta');
    }
}
