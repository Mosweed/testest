<?php

use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
    ]);
})->name('products');

Route::get('/shoppingbag', function () {
    $cart = Product::getFive();

    $total = 0;

    foreach ($cart as $product) {
        $total += $product['price'];
    }

    return view('shoppingbag', ['cart' => $cart , 'total' => $total]);
})->name('shoppingbag');


Route::get('/checkout', function () {

    $cart = Product::getFive();

    $total = 0;

    foreach ($cart as $product) {
        $total += $product['price'];
    }
    return view('checkout_page' ,['total' => $total]);
})->name('checkout');

Route::get('/product/{id}', function ($id) {
    $product = Product::find($id);

    return view('product', ['product' => $product]);
})->name('product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';