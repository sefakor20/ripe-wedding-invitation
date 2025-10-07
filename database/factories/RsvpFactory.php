<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rsvp>
 */
class RsvpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => '0'.fake()->numberBetween(20, 59).fake()->numerify('#######'),
            'response' => fake()->randomElement(['attending', 'unable_to_attend']),
            'message' => fake()->optional()->sentence(),
        ];
    }
}
