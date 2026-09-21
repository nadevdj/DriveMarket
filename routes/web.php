<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/{key}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
