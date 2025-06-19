<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users who have the 'Teacher' role
        $teacherUsers = User::whereHas('roles', function ($query) {
            $query->where('role_name', 'Teacher');
        })->get();

        foreach ($teacherUsers as $user) {
            // Only create a teacher profile if it doesn't already exist
            if (!$user->teacher) {
                Teacher::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
