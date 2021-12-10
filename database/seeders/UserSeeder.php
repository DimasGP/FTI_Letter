<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'argowibowo',
                'nama' => 'Argo Wibowo',
                'no_induk' => 12345,
                'no_hp' => '081315927777',
                'email' => 'dosen@gmail.com',
                'password' => bcrypt(111),
                'role' => 'dosen'
            ],
            [
                'username' => 'dimasgabriel',
                'nama' => 'Dimas Gabriel P',
                'no_induk' => 72190356,
                'no_hp' => '08954121111',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt(111),
                'role' => 'mahasiswa'
            ],
            [
                'username' => 'admin',
                'nama' => 'PPA SIUKDW',
                'no_induk' => 123,
                'no_hp' => '08954121111',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(111),
                'role' => 'admin'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
