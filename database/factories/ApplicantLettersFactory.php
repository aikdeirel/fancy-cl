<?php

namespace Database\Factories;

use App\Models\Recipients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplicantLetter>
 */
class ApplicantLettersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $recipients = Recipients::pluck('id')->toArray();
        return [
            'recipients_id' => fake()->randomElement($recipients),
            'letter_text' => fake()->words(100, true),
        ];
    }
}
