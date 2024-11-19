<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Premium Dog Food',
                'description' => 'High-quality dog food for all breeds',
                'price' => 29.99,
                'image' => 'dog-food.jpg',
                'category' => 'Food',
                'brand' => 'PetNutrition',
            ],
            [
                'name' => 'Cat Scratching Post',
                'description' => 'Durable scratching post for cats',
                'price' => 39.99,
                'image' => 'cat-post.jpg',
                'category' => 'Furniture',
                'brand' => 'CatJoy',
            ],
            // Add more sample products here as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
