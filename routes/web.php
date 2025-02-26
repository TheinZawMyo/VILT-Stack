<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'getProducts'])->name('get#products');

Route::get('/create', [ProductController::class, 'create'])->name('product#create');

Route::post('/store', [ProductController::class, 'store'])->name('product#store');