<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory(10)->create();
        Profile::factory(10)->create();
        $courses = Course::factory(10)->create();

        foreach ($users as $user) 
        {
            $user->courses()->attach($courses->random(rand(1, 3))->pluck('id')->toArray());
        }
    }
}
