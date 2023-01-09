<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplicantSocials>
 */
class ApplicantSocialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'social_name' => fake()->word(),
            'social_link' => fake()->domainName().'/'.fake()->word(),
            'social_icon' => fake()->imageUrl(),
        ];
    }
}
