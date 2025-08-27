<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Sistem',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'Warga Budi',
            'username' => 'budi',
            'password' => Hash::make('budi123'),
            'level' => 'warga'
        ]);

        Category::create(['name' => 'Bulanan']);
        Category::create(['name' => 'Mingguan']);
    }
}
