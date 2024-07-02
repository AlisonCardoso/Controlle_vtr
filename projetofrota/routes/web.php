<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerCOntroller;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

    Route::resources(['customers'=> CustomerController::class]);
    Route::resources(['workshops'=> WorkshopController::class]);
    Route::resources(['categories'=> CategoryController::class]);
    Route::resources(['products'=> ProductController::class]);
});

require __DIR__.'/auth.php';
