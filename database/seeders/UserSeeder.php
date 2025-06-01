<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $user = [
            [
                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'role' => '1',
                'status' => 1,
                'hp' => '0812345678901',
                'password' => bcrypt('P@55word'),
            ],
            [
                'nama' => 'Gema Santosa Putra',
                'email' => 'gesap02@gmail.com',
                'role' => '0',
                'status' => 1,
                'hp' => '085811000360',
                'password' => bcrypt('P@55word'),
            ],
            [
                'nama' => 'Rizky Pratama',
                'email' => 'rizkypratama@gmail.com',
                'role' => '0',
                'status' => 1,
                'hp' => '082234567890',
                'password' => bcrypt('P@55word'),
            ],
            [
                'nama' => 'Anisa Rahmawati',
                'email' => 'anisarahma@gmail.com',
                'role' => '0',
                'status' => 1,
                'hp' => '083312345678',
                'password' => bcrypt('P@55word'),
            ],
            [
                'nama' => 'Daffa Alfarezi',
                'email' => 'daffaalfarezi@gmail.com',
                'role' => '0',
                'status' => 1,
                'hp' => '085678912345',
                'password' => bcrypt('P@55word'),
            ]
        ];

        foreach ($user as $item) {
            User::Create($item);
        }
    }
}
