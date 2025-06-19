<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Ensure roles exist
        $adminRole = Role::where('role_name', 'Admin')->first();
        $studentRole = Role::where('role_name', 'Student')->first();
        $teacherRole = Role::where('role_name', 'Teacher')->first();

        if (!$adminRole || !$studentRole || !$teacherRole) {
            throw new \Exception("One or more required roles (Admin, Student, Teacher) are missing. Run RoleSeeders first.");
        }

        // Create users
        $users = User::factory(10)->create();

        // Assign first user as Admin
        $adminUser = $users->first();
        $adminUser->roles()->attach($adminRole->id);

        // Assign remaining users randomly as Student or Teacher
        $remainingUsers = $users->slice(1); // skip first admin user

        foreach ($remainingUsers as $user) {
            $role = rand(0, 1) ? $studentRole : $teacherRole;
            $user->roles()->attach($role->id);
        }

    }
}
