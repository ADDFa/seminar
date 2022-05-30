<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TopikKonferensi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],

            'nama_topik'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => false
            ],

            'created_at'    => [
                'type'              => 'DATETIME',
                'null'              => true
            ],

            'updated_at'    => [
                'type'              => 'DATETIME',
                'null'              => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('topik_konferensi');
    }

    public function down()
    {
        $this->forge->dropTable('topik_konferensi');
    }
}
