<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// Main page route
Route::get('/', function () {
    return view('welcome');
});
// Products routes
Route::get('products', [ProductController::class, 'index'])->name('prodcut.index');
Route::get('products.show', [ProductController::class, 'show'])->name('product.show');
// User routes
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user.show', [UserController::class, 'show'])->name('user.show');
// 