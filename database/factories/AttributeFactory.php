<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'width' => fake()->randomElement(range(100, 180, 10)),
            'height' => fake()->randomElement(range(200, 280, 10)),
            'weight' => fake()->randomElement(range(10000, 58000, 10)) / 100,
            'pages' => fake()->randomElement(range(10, 1000, 10)),
        ];
    }
}
