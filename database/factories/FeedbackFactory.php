<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->firstName().' '.$this->faker->lastName(),
            'feedback' => $this->faker->text(200),
            'client_pic' => $this->faker->imageUrl(100, 100),
        ];
    }
}
