<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = [
            [
                'title' => 'Fresh Apples',
                'description' => 'Experience the delightful crunch and natural sweetness of our freshly picked apples. Sourced from local orchards, these apples are a healthy and tasty snack option.',
                'image' => 'fresh_apples.jpg',
                'product_category' => '1',
                'order' => 1,
            ],
            [
                'title' => 'Juicy Watermelons',
                'description' => 'Beat the heat with our juicy watermelons that burst with refreshing flavor. These hydrating fruits are perfect for staying cool during hot days.',
                'image' => 'juicy_watermelons.jpg',
                'product_category' => '2',
                'order' => 2,
            ],
            [
                'title' => 'Organic Berries',
                'description' => 'Delight in the natural sweetness of our organic berries. These nutrient-packed gems are not only delicious but also contribute to a balanced and health-conscious diet.',
                'image' => 'organic_berries.jpg',
                'product_category' => '3',
                'order' => 3,
            ],
        ];

        // Insert the fruits into the database
        Product::insert($fruits);
    }
}
