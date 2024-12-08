<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Display all products

Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

// Product-related routes
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Show product form
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store new product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show edit form
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Update product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete product
