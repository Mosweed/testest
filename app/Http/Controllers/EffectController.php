<?php

namespace App\Http\Controllers;

use App\Models\Effect;
use Illuminate\Http\Request;

class EffectController extends Controller
{
  public function index(Request $request)
{
    $validated = $request->validate([
        'search' => ['nullable', 'string', 'max:255'],
    ]);

    $query = Effect::query();

    if (!empty($validated['search'])) {
        $query->where('name', 'like', '%' . $validated['search'] . '%');
    }

    $effects = $query->paginate(2)->withQueryString();

    return view('effects.index', compact('effects'));
}


    public function create()
    {
        return view('effects.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        Effect::create($data);

        return redirect()->route('effects.index');
    }

    public function edit(Effect $effect)
    {
        return view('effects.edit', compact('effect'));
    }

    public function update(Effect $effect)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        $effect->update($data);

        return redirect()->route('effects.index');
    }

    public function destroy(Effect $effect)
    {
        $effect->delete();
        return redirect()->route('effects.index');
    }
}