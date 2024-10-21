<?php

namespace Database\Seeders;

use App\Models\Social_Network;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social_Network::factory(5)->create();
    }
}
