<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Criteria extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'K1',
                'name'    => 'Keunikan'
            ],
            [
                'code' => 'K2',
                'name'    => 'Kebersihan'
            ],
            [
                'code' => 'K3',
                'name'    => 'Sarana Prasarana'
            ],
            [
                'code' => 'K4',
                'name'    => 'kondisi lingkungan sosial ekonomi'
            ],
            [
                'code' => 'K5',
                'name'    => 'Keindahan'
            ],
            [
                'code' => 'K6',
                'name'    => 'Jarak tempuh'
            ],
            [
                'code' => 'K7',
                'name'    => 'Kuliner'
            ],

        ];

        $this->db->table('criteria')->insertBatch($data);
    }
}
