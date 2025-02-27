<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'getProducts'])->name('get#products');

Route::get('/create', [ProductController::class, 'create'])->name('product#create');

Route::post('/store', [ProductController::class, 'store'])->name('product#store');

Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product#edit');  

Route::put('/update/{product}', [ProductController::class, 'update'])->name('product#update');

Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->name('product#destroy');