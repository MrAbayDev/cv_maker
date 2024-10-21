<?php

namespace Database\Seeders;

use App\Models\Language_Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
//            SocialNetworkSeeder::class,
//            SocialNetworkStudentSeeder::class,
//            SkillSeeder::class,
//            SkillStudentSeeder::class,
//            LanguageSeeder::class,
//            Language_Student::class,
        ]);
    }
}
