<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', [FruitController::class, 'index'])->name('Fruits.index');
Route::get('/Fruits/create', [FruitController::class, 'create'])->name('Fruits.create');
Route::get('/Fruits/{id}', [FruitController::class, 'show'])->name('Fruits.show');
Route::post('/Fruits', [FruitController::class, 'store'])->name('Fruits.store');
