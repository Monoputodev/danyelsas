<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'title' => 'John Doe',
                'subtitle' => 'Customer',
                'description' => 'I am amazed by the variety and freshness of fruits available on this website. The fruits were delivered on time and were of excellent quality.',
                'image' => 'testimonial_john_doe.jpg',
            ],
            [
                'title' => 'Alice Johnson',
                'subtitle' => 'Customer',
                'description' => 'The exotic fruits I ordered from this website were delicious and unique. I had a great experience shopping here and will definitely come back for more.',
                'image' => 'testimonial_alice_johnson.jpg',
            ],
            [
                'title' => 'Robert Williams',
                'subtitle' => 'Customer',
                'description' => 'I love the organic fruits offered by this website. Knowing that they are free from chemicals gives me confidence in my choice for a healthier lifestyle.',
                'image' => 'testimonial_robert_williams.jpg',
            ],
        ]);
    }
}
