<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->unique()->numberBetween(1000, 9999),
            'name' => fake()->name(),
            'age' => fake()->numberBetween(18, 30),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['male', 'female']),
            'phone' => fake()->unique()->numerify('######'),

        ];
    }
}
