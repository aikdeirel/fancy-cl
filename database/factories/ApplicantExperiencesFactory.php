<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicantExperiencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'experience_title' => fake()->jobTitle(),
            'experience_company' => fake()->company().' '.fake()->companySuffix(),
            'experience_from' => fake()->date(),
            'experience_to' => fake()->date(),
            'experience_description' => fake()->text(),
        ];
    }
}
