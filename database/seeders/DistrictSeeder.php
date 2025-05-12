<?php

namespace Database\Seeders;

use App\Models\District;
use Database\Factories\ImagesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $districts = [

                // Safety
                [
                    'name' => 'Police Station',
                    'category' => 'Safety',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Fire Station',
                    'category' => 'Safety',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],

                // Recreation
                [
                    'name' => 'Park',
                    'category' => 'Recreation',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Cinema',
                    'category' => 'Recreation',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Sports Complex',
                    'category' => 'Recreation',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],

                // Environmental Quality
                [
                    'name' => 'Water Treatment Plant',
                    'category' => 'Environmental Quality',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],

                // Facilities
                [
                    'name' => 'School',
                    'category' => 'Facilities',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Store',
                    'category' => 'Facilities',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Hospital',
                    'category' => 'Facilities',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],

                // Mobility
                [
                    'name' => 'Train Station',
                    'category' => 'Mobility',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Road',
                    'category' => 'Mobility',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Bicycle Path',
                    'category' => 'Mobility',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ],
                [
                    'name' => 'Gas Station',
                    'category' => 'Mobility',
                    'image_path' => 'districts/HYyED6l1RkmHfRNm4TlF0HksKxNE3FMBPjUrSb2Y.jpg',
                ]
        ];

        foreach ($districts as $district) {
            District::factory()->create($district);
        }
    }
}