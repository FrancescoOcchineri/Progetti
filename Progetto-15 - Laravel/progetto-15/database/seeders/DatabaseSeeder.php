<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory; // Importa la classe FakerFactory
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = FakerFactory::create(); 

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('Pa$$w0rd!')
        ]);

        $roles = ['Admin', 'Instructor', 'User']; 
        for ($i = 0; $i < 20; $i++) {
            User::factory()->create([
                'role' => $faker->randomElement($roles), 
                'password' => Hash::make('Pa$$w0rd!')
            ]);
        }

        $this->call([
            CourseSeeder::class,
            ActivitySeeder::class,
            ReservationSeeder::class
        ]);
    }
}
