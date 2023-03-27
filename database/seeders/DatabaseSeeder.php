<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\ProjectTimeline;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->count(1)->create();
        Feedback::factory()->count(10)->create();
        Project::factory()
            ->count(10)
            ->hasPictures(5)
            ->create();
        ProjectTimeline::factory()
            ->count(10)
            ->hasprojectTimelineRows(3)
            ->create();
        Quote::factory()
            ->count(10)
            ->hasQuoteRow(5)
            ->create();
        Client::factory()
            ->count(10)
            ->create();


//        $this->run([
//            ClientSeeder::class,
//            FeedbackSeeder::class,
//            ProjectSeeder::class,
//            ProjectTimelineSeeder::class,
//            QuoteSeeder::class
//        ]);
    }
}
