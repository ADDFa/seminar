<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemateri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'              => true
            ],

            'nama_pemateri'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => false
            ],

            'asal_instansi'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => false
            ],

            'foto_profile'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => false
            ],

            'path'              => [
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
        $this->forge->createTable('pemateri');
    }

    public function down()
    {
        $this->forge->dropTable('pemateri');
    }
}
