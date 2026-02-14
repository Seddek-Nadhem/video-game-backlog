<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'platform' => fake()->randomElement(['PC', 'PlayStation 5', 'Nintendo Switch', 'Xbox Series X']),
            'status' => fake()->randomElement(['Playing', 'Completed', 'Wishlist', 'Abandoned']),
            'release_year' => fake()->numberBetween(2010, 2024),
        ];
    }
}
