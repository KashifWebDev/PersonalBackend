<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tech = ['PHP', 'Angular', 'HTML', 'CSS', 'JavaScript', 'JS-Charts', 'Angular', 'MySQL'];
        $title = $this->faker->text($this->faker->numberBetween(10, 50));

        return [
            'title' => $title,
            'about' => $this->faker->text($this->faker->numberBetween(200, 800)),
            'client' => $this->faker->name,
            'slug' => $this->faker->text(50),
            'url' => $this->faker->url(),
            'start_date' => $this->faker->date(),
            'tags' => $this->faker->randomElements($tech, rand(1, count($tech)))
        ];
    }
}
