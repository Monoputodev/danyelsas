<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                'title' => 'Explore the World of Fresh Fruits',
                'subtitle' => 'Experience Nature\'s Bounty and Nutritional Delights',
                'image' => 'fruits_hero1.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Delightful Fruit-based Recipes',
                'subtitle' => 'Unleash Your Culinary Creativity with Fruits',
                'image' => 'fruits_hero2.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Embrace a Wholesome Lifestyle',
                'subtitle' => 'Nourish Your Body and Mind with Natural Goodness',
                'image' => 'fruits_hero3.jpg',
                'order' => 3,
            ],
        ]);
    }
}
