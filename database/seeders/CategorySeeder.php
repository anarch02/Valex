<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => ['en' => 'Category 1', 'ru' => 'Категория 1', 'uz' => 'Kategoriya 1'], 'color' => '#FF0000', 'description' => ['en' => 'Description 1', 'ru' => 'Описание 1', 'uz' => 'Tavsif 1']],
            ['name' => ['en' => 'Category 2', 'ru' => 'Категория 2', 'uz' => 'Kategoriya 2'], 'color' => '#00FF00', 'description' => ['en' => 'Description 2', 'ru' => 'Описание 2', 'uz' => 'Tavsif 2']],
            ['name' => ['en' => 'Category 3', 'ru' => 'Категория 3', 'uz' => 'Kategoriya 3'], 'color' => '#0000FF', 'description' => ['en' => 'Description 3', 'ru' => 'Описание 3', 'uz' => 'Tavsif 3']],
            ['name' => ['en' => 'Category 4', 'ru' => 'Категория 4', 'uz' => 'Kategoriya 4'], 'color' => '#FFFF00', 'description' => ['en' => 'Description 4', 'ru' => 'Описание 4', 'uz' => 'Tavsif 4']],
            ['name' => ['en' => 'Category 5', 'ru' => 'Категория 5', 'uz' => 'Kategoriya 5'], 'color' => '#00FFFF', 'description' => ['en' => 'Description 5', 'ru' => 'Описание 5', 'uz' => 'Tavsif 5']],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
