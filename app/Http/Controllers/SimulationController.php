<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Effect;
use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function index()
    {
        $groupedDistricts = District::all()->groupBy('category')->sortKeys();

        $districts = District::with('effects')->get();

        $effects = Effect::all();

        $districtEffectMap = [];

        foreach ($districts as $district) {
            $districtEffectMap[$district->name] = [];

            foreach ($district->effects as $effect) {
                $districtEffectMap[$district->name][$effect->name] = $effect->pivot->value;
            }
        }
        return view('simulation.index' , compact('groupedDistricts' , 'effects', 'districtEffectMap'));
    }


}
