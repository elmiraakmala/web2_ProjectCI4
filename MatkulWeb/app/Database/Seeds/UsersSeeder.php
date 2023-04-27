<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'elmiraakmala',
                'password' => password_hash('elmira41521120024', PASSWORD_DEFAULT),
            ]

        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
