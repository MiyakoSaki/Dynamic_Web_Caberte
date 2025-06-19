<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schedule::factory(5)->create()->each(function ($schedule) {
            $course = Course::inRandomOrder()->first();
            $schedule->save();
        });
    }
}
