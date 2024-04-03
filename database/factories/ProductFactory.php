<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'description' => fake()->text(),
            'image' => fake()->text(),
            'price' => fake()->numberBetween(100, 1000),
            'quantity' => fake()->numberBetween(8, 20),
        ];
    }
}
