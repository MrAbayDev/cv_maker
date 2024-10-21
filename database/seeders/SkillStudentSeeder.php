<?php

namespace Database\Seeders;

use App\Models\Skill_Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill_Student::factory(5)->create();
    }
}
