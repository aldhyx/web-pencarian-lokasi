<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Alternative extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'A1',
                'name'    => 'Fatumnasin'
            ],
            [
                'code' => 'A2',
                'name'    => 'Fatuulan'
            ],
            [
                'code' => 'A3',
                'name'    => 'Air tagepe Noinbila'
            ],
            [
                'code' => 'A4',
                'name'    => 'Hutan Bonsai'
            ],
            [
                'code' => 'A5',
                'name'    => 'Air terjun Love Noinbila'
            ],
            [
                'code' => 'A6',
                'name'    => 'Gua kona Bau'
            ],
            [
                'code' => 'A7',
                'name'    => 'Air terjun Oehala'
            ],
            [
                'code' => 'A8',
                'name'    => 'Fatunausus'
            ],
            [
                'code' => 'A9',
                'name'    => 'Kerajaan Fatukopa'
            ],
            [
                'code' => 'A10',
                'name'    => 'Fatukopa'
            ],
            [
                'code' => 'A11',
                'name'    => 'Pantai nunkolo'
            ],
            [
                'code' => 'A12',
                'name'    => 'Pantai Kolbano'
            ],
            [
                'code' => 'A13',
                'name'    => 'Pantai Oetune'
            ],
            [
                'code' => 'A14',
                'name'    => 'Suku Boti'
            ],
            [
                'code' => 'A15',
                'name'    => 'Pantai Nualunat'
            ],
            [
                'code' => 'A16',
                'name'    => 'Cagar alam Gunung Mutis'
            ],
            [
                'code' => 'A17',
                'name'    => 'Taman Rekreasi Buat'
            ],
        ];

        $this->db->table('alternative')->insertBatch($data);
    }
}
