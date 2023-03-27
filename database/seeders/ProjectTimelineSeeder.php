<?php

namespace Database\Seeders;

use App\Models\ProjectTimeline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectTimeline::factory()
            ->count(10)
            ->hasProjectTimelineRow(3)
            ->create();
    }
}
