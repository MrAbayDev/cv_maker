<?php

namespace Database\Factories;

use App\Models\Social_Network_Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social_Network>
 */
class Social_NetworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_network_students_id' => Social_Network_Student::factory(),
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
        ];
    }
}
