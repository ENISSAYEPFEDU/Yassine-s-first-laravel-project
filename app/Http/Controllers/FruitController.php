<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catégorie;
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
        $Fruits = Fruit::with('Catégorie')->orderBy('created_at', 'desc')->paginate(10);
        return view('Fruits.index', ["Fruits" => $Fruits]);
    }


    public function show($id)
    {
        $fruit = Fruit::with('Catégorie')->findOrFail($id);
        return view('Fruits.show', ["fruit" => $fruit]);
    }


    public function create()
    {
        // route --> /Fruits/create

        $Catégories = Catégorie::all();

        return view('Fruits.create', ["Catégories" => $Catégories]);
    }

    public function store(Request $request)
    {
        // --> /Fruits/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'required|string|min:20|max:1000',
            'catégorie_id' => 'required|exists:catégories,id',
            'price' => 'required|numeric|min:0|max:50000',
        ]);
        Fruit::create($validated);
        return redirect()->route('Fruits.index')->with('success', 'Fruit created successfully.');
    }

    public function destroy($id)
    {
        // --> /Fruits/{id} (DELETE)
        $fruit = Fruit::findOrFail($id);
        $fruit->delete();
        return redirect()->route('Fruits.index')->with('success', 'Fruit Deleted successfully.');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
