<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CriteriaGrades extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code_alternative' => 'A1',
                'code_criteria' => 'K1',
                'grade' => 70
            ],
        ];

        $this->db->table('criteria_grades')->insertBatch($data);
    }
}
