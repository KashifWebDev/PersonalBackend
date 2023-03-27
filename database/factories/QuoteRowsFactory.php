<?php

namespace Database\Factories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuoteRows>
 */
class QuoteRowsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quote_id' => Quote::factory(),
            'description' => $this->faker->text(),
            'qty' => $this->faker->numberBetween(0, 2),
            'cost' => $this->faker->numberBetween(0, 5),
            'tax' => $this->faker->numberBetween(0, 2),
            'payment_made' => 0,
        ];
    }
}
