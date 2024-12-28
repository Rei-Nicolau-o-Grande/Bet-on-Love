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
        return [
            'title' => $this->faker->unique(true)->sentence,
            'content' => $this->faker->paragraph(20, true),
            'status_post' => $this->faker->randomElement(['Published', 'Draft']),
            'code' => substr(md5(uniqid(rand(), true)), 0, 8),
//            'finish_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'amount' => $this->faker->randomFloat(2, 1, 1000000),
            'is_active' => true,
        ];
    }
}
