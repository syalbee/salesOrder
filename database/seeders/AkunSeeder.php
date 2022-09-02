<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'nama' => 'ini akun Admin',
                'password' => bcrypt('123456'),
                'level' => 'admin'
            ],
            [
                'username' => 'user',
                'nama' => 'ini akun user',
                'password' => bcrypt('123456'),
                'level' => 'user'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
