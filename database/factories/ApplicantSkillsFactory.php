<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicantSkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'skill_name' => fake()->word(),
            'skill_category' => fake()->randomElement(['backend', 'database', 'frontend', 'basic', 'misc']),
            'skill_order' => fake()->randomDigitNotZero(),
        ];
    }
}
