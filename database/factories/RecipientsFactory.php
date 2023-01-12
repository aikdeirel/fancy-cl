<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecipientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $recipientName = fake()->title().' '.fake()->lastName();
        return [
            'recipient_company' => fake()->company(),
            'recipient_name' => $recipientName,
            'recipient_street' => fake()->streetName().' '.fake()->numberBetween(1, 999),
            'recipient_city' => fake()->numberBetween(10000, 99999).' '.fake()->city(),
            'recipient_salutation' => $recipientName.',',
        ];
    }
}
