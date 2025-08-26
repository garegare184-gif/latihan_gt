<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warga;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'Admin',
             'password' => bcrypt('12345'),
             'level' => 'admin'
        ]);

        User::create([
            'name' => 'Warga',
            'username' => 'Warga',
             'password' => bcrypt('12345'),
             'level' => 'warga'
        ]);
         Warga::create([
            'username' => 'warga',
            'name' => 'warga',
            'alamat' => 'warga',
            'email' => 'warga@gmail.com',
            'password' => 'warga'
         ]);

    }
}