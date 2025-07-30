<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create([
            'name' => 'Adel',
            'level' => 'warga',
            'username' => 'warga',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Hegar',
            'level' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('password123'),
        ]);
    }
}
