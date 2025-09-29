<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

/*
|-----------------ninjas---------------------|
| id   | name    | bio    |  Catégorie_id    |
|------|---------|--------|------------------|
| 01   | Orange  | blah   |     03           |
| 02   | Banana  | blah   |     02           |
| 03   | peach   | blah   |     03           |
| 04   | apple   | blah   |     03           |
|--------------------------------------------|

|-----------------dojos---------------|
| id   | name    | loc     | desc     |
|------|---------|---------|----------|
| 01   | abc     | UK      | blah     |
| 02   | def     | Spain   | blah     |
| 03   | ghi     | Japan   | blah     |
|-------------------------------------|
*/

class FruitController extends Controller
{
    public function index()
    {
        // route --> /Fruits/
        $Fruits = Fruit::orderBy('created_at', 'desc')->paginate(10);
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
