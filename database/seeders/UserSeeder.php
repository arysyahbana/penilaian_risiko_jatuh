<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'nim' => '111111',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'Admin',
                'no_hp' => '',
                'alamat' => '',
                'jenis_kelamin' => 'Pria',
                'remember_token' => null,
            ],
        ]);

    }
}
