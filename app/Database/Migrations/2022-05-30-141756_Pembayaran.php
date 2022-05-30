<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_paper'          => [
                'type'                  => 'INT',
                'constraint'            => 11
            ],

            'id_peserta'        => [
                'type'                  => 'INT',
                'constraint'            => 11
            ],

            'metode_pembayaran' => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
            ],

            'status'            => [
                'type'                  => 'VARCHAR',
                'constraint'            => '100',
                'null'                  => false
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

        $this->forge->addForeignKey('id_paper', 'paper', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_peserta', 'peserta', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
