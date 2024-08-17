<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'name' => [
                    'en' => 'Product 1',
                    'ru' => 'Продукт 1',
                    'uz' => 'Mahsulot 1',
                ],
                'description' => [
                    'en' => 'Description of product 1',
                    'ru' => 'Описание продукта 1',
                    'uz' => 'Mahsulot 1 haqida',
                ],
                'price' => 100.00,
                'sku' => 'product-1',
                'stock' => 100,
            ],
            [
                'category_id' => 1,
                'name' => [
                    'en' => 'Product 2',
                    'ru' => 'Продукт 2',
                    'uz' => 'Mahsulot 2',
                ],
                'description' => [
                    'en' => 'Description of product 2',
                    'ru' => 'Описание продукта 2',
                    'uz' => 'Mahsulot 2 haqida',
                ],
                'price' => 200.00,
                'sku' => 'product-2',
                'stock' => 200,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'en' => 'Product 3',
                    'ru' => 'Продукт 3',
                    'uz' => 'Mahsulot 3',
                ],
                'description' => [
                    'en' => 'Description of product 3',
                    'ru' => 'Описание продукта 3',
                    'uz' => 'Mahsulot 3 haqida',
                ],
                'price' => 300.00,
                'sku' => 'product-3',
                'stock' => 300,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'en' => 'Product 4',
                    'ru' => 'Продукт 4',
                    'uz' => 'Mahsulot 4',
                ],
                'description' => [
                    'en' => 'Description of product 4',
                    'ru' => 'Описание продукта 4',
                    'uz' => 'Mahsulot 4 haqida',
                ],
                'price' => 400.00,
                'sku' => 'product-4',
                'stock' => 400,
            ],
            [
                'category_id' => 3,
                'name' => [
                    'en' => 'Product 5',
                    'ru' => 'Продукт 5',
                    'uz' => 'Mahsulot 5',
                ],
                'description' => [
                    'en' => 'Description of product 5',
                    'ru' => 'Описание продукта 5',
                    'uz' => 'Mahsulot 5 haqida',
                ],
                'price' => 500.00,
                'sku' => 'product-5',
                'stock' => 500,
            ],
            [
                'category_id' => 3,
                'name' => [
                    'en' => 'Product 6',
                    'ru' => 'Продукт 6',
                    'uz' => 'Mahsulot 6',
                ],
                'description' => [
                    'en' => 'Description of product 6',
                    'ru' => 'Описание продукта 6',
                    'uz' => 'Mahsulot 6 haqida',
                ],
                'price' => 600.00,
                'sku' => 'product-6',
                'stock' => 600,
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
