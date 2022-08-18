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
            'id_criteria'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'id_alternative'    => [
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
        $this->forge->addForeignKey('id_criteria', 'criteria', 'id', 'NO ACTION', 'SET NULL');
        $this->forge->addForeignKey('id_alternative', 'alternative', 'id', 'NO ACTION', 'SET NULL');
        $this->forge->createTable('calculation');
    }

    public function down()
    {
        $this->forge->dropTable('calculation');
    }
}
