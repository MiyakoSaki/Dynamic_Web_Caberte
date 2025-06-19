<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'day_of_the_week' => fake()->dayOfWeek(),
            'time_slot' => fake()->time('H:i'),
            'room' => fake()->bothify('Room ###'),
            'term' => fake()->numberBetween(1, 3),
        ];
    }
}
