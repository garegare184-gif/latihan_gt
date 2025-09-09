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
    $this->call([
        // UserSeeder::class,
        // CategorySeeder::class,
        // PaymentSeeder::class,
        // Tambahkan seeder lain di sini
    ]);
        User::create([
            'name' => 'admin',
            'username' => 'Admin',
            'password' => '12345',
            'level' => 'admin'
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


