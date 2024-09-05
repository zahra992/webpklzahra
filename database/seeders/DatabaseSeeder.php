<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'zara',
            'email' => 'zahraal@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => '',
            
        ]);
        User::create([
            'name' => 'zahra',
            'email' => 'zara24@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => '',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
        Product::create([
            'name' => 'Meja Minimalis Tamu',
            'harga' => '$52.00',
            'description' => 'Meja Minimalis Tamu',
            'foto' => 'gambar.png',
        ]);
        Product::create([
            'name' => 'Kursi Cafe Minimalis',
            'harga' => '$45.00',
            'description' => 'Kursi Cafe Minimalis',
            'foto' => 'gambar1.png',
        ]);
        Product::create([
            'name' => 'Lampu Tidur',
            'harga' => '$37.00',
            'description' => 'Lampu Tidur',
            'foto' => 'gambar2.png',
        ]);
        // Product::create([
        //     'name' => ' Rak Buku',
        //     'description' => '',
        //     'harga' => '$25.00',
        //     'foto' => 'gambar3.webp',
        // ]);
        



        
    }
}
