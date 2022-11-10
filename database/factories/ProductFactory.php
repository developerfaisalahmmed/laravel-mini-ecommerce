<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'slug' => fake()->name(),
            'description' => fake()->paragraph('50'),
            'status' => '1',
            'quantity' => fake()->numberBetween($min=100,$max=1000),
            'discount_type' => fake()->numberBetween($min=1,$max=2),
            'discount' => fake()->numberBetween($min=1,$max=30),
            'price' => fake()->numberBetween($min=500,$max=5000),
            'selling_price' => fake()->numberBetween($min=100,$max=500),
        ];
    }
}
