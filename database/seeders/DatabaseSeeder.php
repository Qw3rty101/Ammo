<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategorySeeder::class,
            MenuSeeder::class,
        ]);
        
        User::create([
            'name' => 'Admin Ammo',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
