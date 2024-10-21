<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\LanguageStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>Language::factory()->create()->id,
            'name'=>$this->faker->languageCode(),
        ];
    }
}
