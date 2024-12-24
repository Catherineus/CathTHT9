<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/lipstick', [ProductController::class, 'lipstick'])->name('product.lipstick');
Route::get('/cushion', [ProductController::class, 'cushion'])->name('product.cushion');
Route::get('/blush-on', [ProductController::class, 'blushOn'])->name('product.blushOn');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
