<?php

namespace Database\Seeders;

use App\Models\Social_Network_Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social_Network_Student::factory(5)->create();
    }
}
