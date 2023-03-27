<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'invoice_number' => 'INV-'.$this->faker->randomNumber(),
            'to' => $this->faker->address(),
            'amount' => abs($this->faker->numberBetween(0, 2)),
            'generate_date' => $this->faker->date('Y-m-d'),
            'due_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
