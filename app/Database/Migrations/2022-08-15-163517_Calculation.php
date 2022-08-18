<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Calculation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'id'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'bobot'  => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id', 'alternative', 'id');
        $this->forge->addForeignKey('id', 'criteria', 'id');
        $this->forge->createTable('calculation');
    }

    public function down()
    {
        $this->forge->dropTable('calculation');
    }
}
