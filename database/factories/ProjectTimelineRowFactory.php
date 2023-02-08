<?php

namespace Database\Factories;

use App\Models\ProjectTimeline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectTimelineRow>
 */
class ProjectTimelineRowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_timeline_id' => ProjectTimeline::factory(),
            'heading' => $this->faker->title(),
            'description' => $this->faker->text($this->faker->numberBetween(100, 500)),
            'time' => $this->faker->dateTime(),
            'isDone' => $this->faker->numberBetween(0,10)>5,
        ];
    }
}
