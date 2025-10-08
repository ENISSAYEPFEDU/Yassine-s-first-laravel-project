<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FruitController;
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

/* === Fruits Routes === */

Route::get('/Fruits', [FruitController::class, 'index'])->name('Fruits.index');
Route::get('/Fruits/create', [FruitController::class, 'create'])->name('Fruits.create');
Route::post('/Fruits', [FruitController::class, 'store'])->name('Fruits.store');
Route::get('/Fruits/{id}', [FruitController::class, 'show'])->name('Fruits.show');
Route::delete('/Fruits/{fruit}', [FruitController::class, 'destroy'])->name('Fruits.destroy');

require __DIR__ . '/auth.php';
