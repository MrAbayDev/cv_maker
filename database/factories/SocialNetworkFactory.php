<?php

namespace Database\Factories;

use App\Models\SocialNetworkStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialNetwork>
 */
class SocialNetworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_network_students_id' => SocialNetworkStudent::factory()->create(),
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
        ];
    }
}
