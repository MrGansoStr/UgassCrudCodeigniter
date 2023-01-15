<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $psw = password_hash('123', PASSWORD_DEFAULT);
        $user = 'admin';
        $type = 'admin';
        $data = [
            'user_name' => $user,
            'user_psw'  => $psw,
            'user_type' => $type,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
