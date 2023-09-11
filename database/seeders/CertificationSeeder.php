<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $certifications = [
            [
                'title' => 'Real Estate License',
                'image' => 'real_estate_license.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Property Management Certification',
                'image' => 'property_management_certification.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Real Estate Appraisal Certification',
                'image' => 'appraisal_certification.jpg',
                'order' => 3,
            ],
        ];

        foreach ($certifications as $certification) {
            Certification::create($certification);
        }
    }
}
