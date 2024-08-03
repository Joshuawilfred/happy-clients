<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Holiday>
 */
class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->word())." Day",
            'date' => date('Y-m-d'),
            'email_template' => [
                'title' => $this->faker->sentence(),
                'body' => $this->faker->paragraph(),
            ],
        ];
    }
}
