<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'category_id' => 1,
                'restaurants_id' => 1,
                'name' => 'Dograma',
                'price' => 45.00,
                'code' => 'tm77001',
                'like_count' => 3006,
                'type' => 'meal',
            ],
            [
                'category_id' => 2,
                'restaurants_id' => 2,
                'name' => 'Cheeseburger',
                'price' => 30.00,
                'code' => 'bg4412c',
                'like_count' => 6000,
                'type' => 'meal',
            ],
            [
                'category_id' => 3,
                'restaurants_id' => 3,
                'name' => 'Philadelphia Roll',
                'price' => 85.00,
                'code' => 'ss0377x',
                'like_count' => 1200,
                'type' => 'meal',
            ],
            [
                'category_id' => 4,
                'restaurants_id' => 4,
                'name' => 'Shish Kebab',
                'price' => 65.00,
                'code' => 'kb9921x',
                'like_count' => 1200,
                'type' => 'meal',
            ],
            [
                'category_id' => 5,
                'restaurants_id' => 5,
                'name' => 'Lentil Soup',
                'price' => 25.00,
                'code' => 'sp1102l',
                'like_count' => 850,
                'type' => 'meal',
            ],
            [
                'category_id' => 6,
                'restaurants_id' => 6,
                'name' => 'Caesar Salad',
                'price' => 40.00,
                'code' => 'sl5543c',
                'like_count' => 2100,
                'type' => 'meal',
            ],
            [
                'category_id' => 7,
                'restaurants_id' => 7,
                'name' => 'Fresh Orange Juice',
                'price' => 20.00,
                'code' => 'dr0012o',
                'like_count' => 1500,
                'type' => 'meal',
            ],
            [
                'category_id' => 8,
                'restaurants_id' => 8,
                'name' => 'Quinoa Bowl',
                'price' => 55.00,
                'code' => 'pp8832q',
                'like_count' => 450,
                'type' => 'meal',
            ],
            [
                'category_id' => 9,
                'restaurants_id' => 9,
                'name' => 'Cheesecake',
                'price' => 35.00,
                'code' => 'ds9901c',
                'like_count' => 3200,
                'type' => 'meal',
            ],
            [
                'category_id' => 10,
                'restaurants_id' => 10,
                'name' => 'Pasta Carbonara',
                'price' => 50.00,
                'code' => 'ps1234c',
                'like_count' => 1800,
                'type' => 'meal',
            ],
            [
                'category_id' => 11,
                'restaurants_id' => 11,
                'name' => 'Omelette',
                'price' => 30.00,
                'code' => 'br11011',
                'like_count' => 400,
                'type' => 'meal',
            ],
            [
                'category_id' => 12,
                'restaurants_id' => 12,
                'name' => 'Grilled Shrimp',
                'price' => 120.00,
                'code' => 'sf12012',
                'like_count' => 600,
                'type' => 'meal',
            ],
            [
                'category_id' => 13,
                'restaurants_id' => 13,
                'name' => 'Margherita Pizza',
                'price' => 55.00,
                'code' => 'pz8832m',
                'like_count' => 4500,
                'type' => 'meal',
            ],
            [
                'category_id' => 14,
                'restaurants_id' => 14,
                'name' => 'Cappuccino',
                'price' => 25.00,
                'code' => 'cf14014',
                'like_count' => 1800,
                'type' => 'meal',
            ],
            [
                'category_id' => 15,
                'restaurants_id' => 15,
                'name' => 'French Fries',
                'price' => 20.00,
                'code' => 'sn15015',
                'like_count' => 5000,
                'type' => 'meal',
            ],
        ];

        foreach ($foods as $fff) {
            \App\Models\Food::create([
                'category_id' => $fff['category_id'],
                'restaurants_id' => $fff['restaurants_id'],
                'name' => $fff['name'],
                'price' => $fff['price'],
                'code' => $fff['code'],
                'like_count' => $fff['like_count'],
                'type' => $fff['type'],
            ]);
        }
    }
}
