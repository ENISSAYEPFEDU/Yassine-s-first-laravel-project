<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Fruits', function () {
    $Fruits = [
        ["name" => "Apple", "price" => 12000, "id" => "1"],
        ["name" => "Orange", "price" => 15000, "id" => "2"]
    ];

    return view('Fruits.index', ["greetings" => "Hiiii", "Fruits" => $Fruits]);
});


// Route::get('/Fruits/{id}', function ($id) {
//     return view('Fruits.show', ["id" => $id]);
// });

Route::get('/Fruits/{id}', function ($id) {
    $Fruits = [
        ["name" => "Apple", "price" => 12000, "id" => "1"],
        ["name" => "Orange", "price" => 15000, "id" => "2"]
    ];

    $fruit = collect($Fruits)->firstWhere('id', $id);

    if (!$fruit) {
        abort(404, 'Fruit not found');
    }

    return view('Fruits.show', ["fruit" => $fruit]);
});
