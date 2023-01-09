<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplicantEducations>
 */
class ApplicantEducationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'education_title' => fake()->company(),
            'education_from' => fake()->date(),
            'education_to' => fake()->date(),
            'education_graduation' => fake()->words(5, true),
        ];
    }
}
