<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', function () {
    $Fruits = [
        ["name" => "Apple", "Price" => 12000, "id" => "1"],
        ["name" => "Orange", "Price" => 15000, "id" => "2"]
    ];

    return view('Fruits.index', [
        "greetings" => "Hiiii",
        "Fruits" => $Fruits
    ]);
});


Route::get('/Fruits/{id}', function ($id) {

    return view('Fruits.show', ["id" => $id]);
});
