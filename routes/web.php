<?php

use Illuminate\Support\Facades\Route;

$Fruits = [
    ["name" => "Apple", "price" => 12000, "id" => "1", "Stock" => "300"],
    ["name" => "Orange", "price" => 15000, "id" => "2", "Stock" => "654"],
    ["name" => "Banana", "price" => 35000, "id" => "3", "Stock" => "120"]
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Fruits', function () use ($Fruits) {
    return view('Fruits.index', [
        "greetings" => "Hiiii",
        "Fruits" => $Fruits
    ]);
});

Route::get('/Fruits/{id}', function ($id) use ($Fruits) {
    $fruit = collect($Fruits)->firstWhere('id', $id);

    if (!$fruit) {
        abort(404, 'Fruit not found');
    }

    return view('Fruits.show', ["fruit" => $fruit]);
});
