<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users who have the 'Student' role
        $studentUsers = User::whereHas('roles', function ($query) {
            $query->where('role_name', 'Student');
        })->get();

        foreach ($studentUsers as $user) {
            $student = Student::factory()->create([
                'user_id' => $user->id
            ]);

            // Enroll student into 2–3 random courses
            $courses = Course::inRandomOrder()->take(rand(2, 3))->pluck('id');
            $student->courses()->attach($courses);
        }
    }
}
