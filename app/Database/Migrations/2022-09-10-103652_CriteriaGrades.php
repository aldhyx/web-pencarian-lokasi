<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriteriaGrades extends Migration
{
    public function up()
    {
        /**
         * The value entered in this table is the value obtained from the assessment given by the expert on the available alternatives based on the specified criteria.
         * Example: K1 A1 has 72, etc
         */
        $this->forge->addField([
            'id'    => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code_criteria'    => [
                'type'           => 'varchar',
                'constraint'     => 10,
            ],
            'code_alternative'    => [
                'type'           => 'varchar',
                'constraint'     => 10,
            ],
            'grade'  => [
                'type'       => 'int',
                'constraint' => 3,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('criteria_grades');
    }

    public function down()
    {
        $this->forge->dropTable('criteria_grades');
    }
}
