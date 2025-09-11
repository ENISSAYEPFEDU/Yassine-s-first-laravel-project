<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function index()
    {
        // route --> /Fruits/
        $Fruits = Fruit::orderBy('created_at', 'desc')->get();
        return view('Fruits.index', ["Fruits" => $Fruits]);
    }


    public function show($id)
    {
        $fruit = Fruit::findOrFail($id);
        return view('Fruits.show', ["fruit" => $fruit]);
    }


    public function create()
    {
        // route --> /Fruits/create
        return view('Fruits.create');
    }

    public function store()
    {
        // --> /Fruits/ (POST)
        // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id)
    {
        // --> /Fruits/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
