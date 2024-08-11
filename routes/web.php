<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// Main route
Route::view ('/', 'home.index')->name('home'); // Main page
// Products routes
Route::get('products', [ProductController::class, 'index'])->name('prodcuts'); // Catalog page
Route::get('products.create', [ProductController::class, 'create'])->name('prodcuts.create'); // Create product page
Route::post('products', [ProductController::class, 'store'])->name('prodcuts.store'); // Create product request
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show'); // Open current product page
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Open edit page for current product
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update'); // Update current product query
Route::delete('products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete'); // Delete current product query

// User routes
Route::get('user/registration', [UserController::class, 'index'])->name('users.index');
Route::post('user/registration', [UserController::class, 'show'])->name('users.show'); // Open profile for current user
// Route::post('user.registration/{user}', [UserController::class, 'store'])->name('users.show');
// Other routes
// 
