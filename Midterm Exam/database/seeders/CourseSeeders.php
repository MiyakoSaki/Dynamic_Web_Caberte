<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Course::factory(5)->create()->each(function ($course) {
            // Assign each course a random teacher
            $teacher = Teacher::inRandomOrder()->first();
            $course->save();
        });
    }
}
