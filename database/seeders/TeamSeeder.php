<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'John Smith',
                'designation' => 'Senior Attorney',
                'image' => 'john_smith.jpg',
                'order' => 1,
            ],
            [
                'name' => 'Alice Johnson',
                'designation' => 'Associate Attorney',
                'image' => 'alice_johnson.jpg',
                'order' => 2,
            ],
            [
                'name' => 'Robert Williams',
                'designation' => 'Paralegal',
                'image' => 'robert_williams.jpg',
                'order' => 3,
            ],
        ]);
    }
}
