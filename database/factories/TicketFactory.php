<?php

namespace Database\Factories;

use App\Enum\TicketPlace;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,
            'place' => TicketPlace::Wait->value,
            'code' => $this->faker->unique()->randomNumber(8),
            'value' => $this->faker->randomFloat(2, 1, 10000),
            'end_date' => $this->faker->dateTimeBetween('now', '+5 year'),
            'is_active' => true,
        ];
    }
}
