<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            \Database\Seeders\RestaurantsSeeder::class,
            \Database\Seeders\CategorySeeder::class,
            \Database\Seeders\FoodSeeder::class,
            // \Database\Seeders\PostSeeder::class,
            // \Database\Seeders\CarSeeder::class,
        ]);
        // \App\Models\Employee::factory(100)->create();
        // \App\Models\Student::factory(100)->create();
        \App\Models\Food::factory(1000)->create();
    }
}
