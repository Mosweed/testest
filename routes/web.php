<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\EffectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimulationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SimulationController::class, 'index'])->name('simulation.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('effects')->group(function () {
    Route::get('/', [EffectController::class, 'index'])->name('effects.index');
    Route::get('/create', [EffectController::class, 'create'])->name('effects.create');
    Route::post('/', [EffectController::class, 'store'])->name('effects.store');
    Route::get('/{effect}/edit', [EffectController::class, 'edit'])->name('effects.edit');
    Route::put('/{effect}', [EffectController::class, 'update'])->name('effects.update');
    Route::delete('/{effect}', [EffectController::class, 'destroy'])->name('effects.destroy');
});

    Route::resource('districts', DistrictController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';