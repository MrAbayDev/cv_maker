<?php

namespace Database\Seeders;

use App\Models\SkillStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillStudent::factory(5)->create();
    }
}
