<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
use App\Models\Warga;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
<<<<<<< HEAD
{
    $this->call([
        UserSeeder::class,
        // CategorySeeder::class,
        // PaymentSeeder::class,
        // Tambahkan seeder lain di sini
    ]);
}

=======
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
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
}
