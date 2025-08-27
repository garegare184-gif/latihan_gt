<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warga;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
<<<<<<< HEAD
        User::create([
            'name' => 'admin',
=======
        // User::factory(10)->create();

        User::factory()->create([
>>>>>>> abce05cdbc78c071eb932a0ae02b814f94b169dc
            'username' => 'Admin',
            'pasword' => '12345',
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
