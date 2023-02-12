<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemilih extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemilih' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas'=>[
                'type'      =>'VARCHAR',
                'constraint' => '100',
            ],
            'pilihan'=>[
                'type'      =>'INT',
                'constraint' => 5,
            ]
        ]);
        $this->forge->addKey('id_pemilih', true);
        $this->forge->createTable('pemilih');
    }

    public function down()
    {
        $this->forge->dropTable('pemilih');
    }
}
