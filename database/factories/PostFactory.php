<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paragraph_quantity = rand(1, 8);
        $sentece_quantity = rand(3, 8);
        return [
            'name' => fake()->sentence($sentece_quantity),
            'content' => fake()->paragraph($paragraph_quantity),
        ];
    }
}
