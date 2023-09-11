<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Create some sample fruit categories for a fruit-related website
        $categories = [
            [
                'title' => 'Explore Fresh Fruits',
                'description' => 'Discover a wide variety of fresh and nutritious fruits, handpicked for their quality and taste.',
                'image' => 'fresh_fruits.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Experience Exotic Flavors',
                'description' => 'Indulge in the unique and delightful flavors of exotic fruits from around the world.',
                'image' => 'exotic_fruits.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Go Organic with Nature\'s Goodness',
                'description' => 'Embrace the goodness of organic fruits, grown naturally without harmful chemicals or pesticides.',
                'image' => 'organic_fruits.jpg',
                'order' => 3,
            ],
        ];

        // Insert the fruit categories into the database
        Service::insert($categories);
    }
}
