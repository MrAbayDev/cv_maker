<?php

namespace Database\Seeders;

use App\Models\SocialNetworkStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialNetworkStudent::factory(5)->create();
    }
}
