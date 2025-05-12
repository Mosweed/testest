<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use App\Models\Effect;

class DistrictEffectSeeder extends Seeder
{
    public function run(): void
    {
        $effects = Effect::pluck('id', 'name');

        $data = [
            'Police Station' => [
                'Safety' => 5,
                'Recreation' => 1,
                'Environmental Quality' => 0,
                'Facilities' => 1,
                'Mobility' => 2,
            ],
            'Fire Station' => [
                'Safety' => 4,
                'Recreation' => 1,
                'Environmental Quality' => 2,
                'Facilities' => 1,
                'Mobility' => 2,
            ],
            'Park' => [
                'Safety' => -2,
                'Recreation' => 5,
                'Environmental Quality' => 4,
                'Facilities' => 0,
                'Mobility' => 0,
            ],
            'Cinema' => [
                'Safety' => -1,
                'Recreation' => 4,
                'Environmental Quality' => 0,
                'Facilities' => 2,
                'Mobility' => 0,
            ],
            'Sports Complex' => [
                'Safety' => 0,
                'Recreation' => 5,
                'Environmental Quality' => 2,
                'Facilities' => 3,
                'Mobility' => 0,
            ],
            'Water Treatment Plant' => [
                'Safety' => 0,
                'Recreation' => 0,
                'Environmental Quality' => 5,
                'Facilities' => 2,
                'Mobility' => 0,
            ],
            'School' => [
                'Safety' => 2,
                'Recreation' => 2,
                'Environmental Quality' => 0,
                'Facilities' => 5,
                'Mobility' => -3,
            ],
            'Store' => [
                'Safety' => 0,
                'Recreation' => 0,
                'Environmental Quality' => -2,
                'Facilities' => 5,
                'Mobility' => 0,
            ],
            'Hospital' => [
                'Safety' => 3,
                'Recreation' => 0,
                'Environmental Quality' => 0,
                'Facilities' => 5,
                'Mobility' => 0,
            ],
            'Train Station' => [
                'Safety' => -2,
                'Recreation' => 2,
                'Environmental Quality' => 0,
                'Facilities' => 4,
                'Mobility' => 5,
            ],
            'Road' => [
                'Safety' => -4,
                'Recreation' => 2,
                'Environmental Quality' => -4,
                'Facilities' => 3,
                'Mobility' => 5,
            ],
            'Bicycle Path' => [
                'Safety' => 0,
                'Recreation' => 3,
                'Environmental Quality' => 3,
                'Facilities' => 3,
                'Mobility' => 4,
            ],
            'Gas Station' => [
                'Safety' => -2,
                'Recreation' => 0,
                'Environmental Quality' => -4,
                'Facilities' => 1,
                'Mobility' => 4,
            ],
        ];


        foreach ($data as $districtName => $effectsData) {
            $district = District::where('name', $districtName)->first();

            if (!$district) {
                echo "⚠️ District not found: {$districtName}\n";
                continue;
            }

            $syncData = [];

            foreach ($effectsData as $effectName => $value) {
                if (!isset($effects[$effectName])) {
                    echo "⚠️ Effect not found: {$effectName}\n";
                    continue;
                }

                $syncData[$effects[$effectName]] = ['value' => $value];
            }

            $district->effects()->sync($syncData);
        }

    }
}
