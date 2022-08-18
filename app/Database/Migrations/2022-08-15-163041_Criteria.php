<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Criteria extends Migration
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
            'name' => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'code' => [
                'type'           => 'varchar',
                'constraint'     => 10,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('criteria');
    }

    public function down()
    {
        $this->forge->dropTable('criteria');
    }
}
