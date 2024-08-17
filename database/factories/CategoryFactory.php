<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ['en' => $this->faker->word, 'ru' => $this->faker->word, 'uz' => $this->faker->word],
            'color' => $this->faker->hexColor,
            'description' => ['en' => $this->faker->sentence, 'ru' => $this->faker->sentence, 'uz' => $this->faker->sentence],
        ];
    }
}
