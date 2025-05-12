<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Effect;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
        'search' => ['nullable', 'string', 'max:255'],
    ]);

    $query = District::query();

    if (!empty($validated['search'])) {
        $query->where('name', 'like', '%' . $validated['search'] . '%');
    }

    $districts = $query->paginate(2)->withQueryString();

        return view('districts.index', compact('districts'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function edit(District $district)
    {
        $effects = Effect::all();
        $district->load('effects');
        return view('districts.edit', compact('district', 'effects'));
    }


    public function update(Request $request, District $district)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:districts,name,' . $district->id,
            'category' => 'required|string|in:' . implode(',', District::CATEGORIES),
            'image_path' => 'required|image|max:2048',
            'effects' => 'nullable|array',
            'effects.*.id' => 'exists:effects,id',
            'effects.*.value' => 'required|integer',
        ]);

        $district->name = $validated['name'];
        $district->category = $validated['category'];

        if ($request->hasFile('image_path')) {
            // if ($district->image_path && Storage::disk('public')->exists($district->image_path)) {
            //     Storage::disk('public')->delete($district->image_path);
            // }
            $path = $request->file('image_path')->store('districts', 'public');
            $district->image_path = $path;
        }

        $district->save();

        // Update effecten
        $sync = [];
        foreach ($request->input('effects', []) as $effect) {
            $sync[$effect['id']] = ['value' => $effect['value']];
        }

        $district->effects()->sync($sync);

        return redirect()->route('districts.index')->with('success', 'District updated successfully.');
    }

    /**
     * Verwijder een element.
     */
    public function destroy(District $district)
    {
        // Verwijder afbeelding
        // if ($district->image_path && Storage::disk('public')->exists($district->image_path)) {
        //     Storage::disk('public')->delete($district->image_path);
        // }

        $district->delete();

        return redirect()->route('districts.index')->with('success', 'District successfully removed.');
    }

}