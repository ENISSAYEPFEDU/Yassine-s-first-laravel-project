<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', [FruitController::class, 'index']);

Route::get('/Fruits/create', [FruitController::class, 'create']);

Route::get('/Fruits/{id}', [FruitController::class, 'show']);
