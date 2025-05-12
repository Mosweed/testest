<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Effect;

class EffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Effect::factory()->create([
            'name' => 'Safety',
            'description' => 'Increases safety in the city.',
            'color' => '#1976D2',
        ]);

        Effect::factory()->create([
            'name' => 'Recreation',
            'description' => 'Provides opportunities for relaxation and leisure.',
            'color' => '#43A047',
        ]);

        Effect::factory()->create([
            'name' => 'Environmental Quality',
            'description' => 'Contributes to a better environment and living conditions.',
            'color' => '#388E3C',
        ]);

        Effect::factory()->create([
            'name' => 'Facilities',
            'description' => 'Improvement of local facilities.',
            'color' => '#FBC02D',
        ]);

        Effect::factory()->create([
            'name' => 'Mobility',
            'description' => 'Improves accessibility and transportation.',
            'color' => '#F57C00',
        ]);
    }
}
