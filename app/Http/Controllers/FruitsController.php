<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Fruit;

class FruitsController extends Controller
{
    public function index() {
        $fruits = Fruit::all();
        return view("fruits.index", compact('fruits'));
    }

    public function create() {
        return view("fruits.create");
    }

    public function store(Request $request) {
        $fruit = new Fruit();
        $fruit->name = $request->get('name');
        $newImageName = time().'-'.$request->file('image')->getClientOriginalName();
        $fruit->image = $newImageName;
        $request->file('image')->storeAs('images', $newImageName);
        $fruit->save();
        return redirect()->route('fruits.index');
    }

    public function edit($id) {
        $fruit = Fruit::findOrFail($id);
        return view('fruits.edit', compact('fruit'));
    }

    public function update(Request $request, $id) {
        $fruit = Fruit::findOrFail($id);
        $fruit->name = $request->get('name');
        $fruit->save();
        return redirect()->route('fruits.index');
    }

    public function delete(Request $request) {
        $fruit = Fruit::destroy($request->get('fruit_id'));
        if(Fruit::exists('\wamp64\www\frameworkWeb\storage\app\images\{newImageName}')) {
            Fruit::delete('\wamp64\www\frameworkWeb\storage\app\images\{newImageName}');
        }
        return redirect()->route('fruits.index');
    }
}
