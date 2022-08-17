<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $passwordHash = password_hash(
            'password',
            PASSWORD_BCRYPT // 60 characters
        );

        $data = [
            'username' => 'admin',
            'name'    => 'admin',
            'password'    => $passwordHash
        ];

        $this->db->table('admin')->insert($data);
    }
}
