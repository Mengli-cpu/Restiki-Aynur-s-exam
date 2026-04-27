<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Food;
use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $foods = ['Cafe-de-parij', 'Coca-cola', 'Cezar salad', 'Adana-kebab', 'Tempura s ugryom', 'Kaliforniya s lososem', 'Strawberry milkshake'];
        return [
            'name' => fake()->randomElement($foods),
            'code' => fake()->bothify('#?#?#?#'),
            'price' => fake()->numberBetween(10, 900),
            'category_id' => Category::inRandomOrder()->first()->id,
            'restaurants_id' => Restaurants::inRandomOrder()->first()->id,
            'like_count' => fake()->numberBetween(0, 10000),
            'type' => 'meal', 

        ];
    }
}
