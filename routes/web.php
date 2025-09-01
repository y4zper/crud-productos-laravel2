<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); 
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store'); 
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit'); 
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update'); 
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy'); 

});

require __DIR__.'/auth.php';


