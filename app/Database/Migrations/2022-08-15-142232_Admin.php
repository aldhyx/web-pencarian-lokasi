<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'username'  => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password'  => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin', true);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
