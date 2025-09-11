<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', [FruitController::class, 'index']);


Route::get('/Fruits/create', function () {
    return view('Fruits.create');
});

Route::get('/Fruits/{id}', function ($id) {

    return view('Fruits.show', ["id" => $id]);
});
