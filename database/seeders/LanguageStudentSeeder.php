<?php

namespace Database\Seeders;

use App\Models\Language_Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language_Student::factory(5)->create();
    }
}
