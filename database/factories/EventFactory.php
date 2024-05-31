<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'user_id' => User::factory(),
            'description' => $this->faker->realText(),
            'venue' => $this->faker->lastName() . ' stadium',
            'start_date' => $this->faker->dateTimeThisDecade->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeThisDecade->format('Y-m-d'),
            'location' => $this->faker->city,
        ];
    }
}
