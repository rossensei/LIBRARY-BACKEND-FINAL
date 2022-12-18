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
    public function definition()
    {
        return [
            'lname' => fake()->lastName,
            'fname' => fake()->firstName,
            'course' => fake()->randomElement(["BSIT", "BSCS", "BSN", "BSED", "BSA", "BSHM", "BSCRIM"]),
            'year' => fake()->randomElement(["1", "2", "3", "4"]),
            'gender' => fake()->randomElement(["Male", "Female"]),
            'address' => fake()->streetName()
        ];
    }
}
