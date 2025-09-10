<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', function () {
    $Fruits = [
        ["name" => "Apple", "price" => 12000, "id" => "1", "Stock" => "300"],
        ["name" => "Orange", "price" => 15000, "id" => "2", "Stock" => "654"],
        ["name" => "Banana", "price" => 35000, "id" => "3", "Stock" => "120"]
    ];
    return view('Fruits.index', ["greetings" => "Hiiii", "Fruits" => $Fruits]);
});


Route::get('/Fruits/create', function () {
    return view('Fruits.create');
});

Route::get('/Fruits/{id}', function ($id) {

    return view('Fruits.show', ["id" => $id]);
});
