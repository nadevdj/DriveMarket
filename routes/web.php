<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);