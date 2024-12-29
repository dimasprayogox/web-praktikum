<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Karyawan User',
            'email' => 'karyawan@example.com',
            'password' => bcrypt('password'),
            'role' => 'karyawan',
        ]);
    }
}
