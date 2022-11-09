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
            'quantity' => '99',
            'image' => json_encode([fake()->imageUrl(),fake()->imageUrl()]),
        ];
    }
}
