<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => \App\Models\Category::factory(),
            'name' => [
                'en' => $this->faker->word,
                'ru' => $this->faker->word,
                'uz' => $this->faker->word,
            ],
            'description' => [
                'en' => $this->faker->sentence,
                'ru' => $this->faker->sentence,
                'uz' => $this->faker->sentence,
            ],
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'sku' => $this->faker->unique()->word,
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
