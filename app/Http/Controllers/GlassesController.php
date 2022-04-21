<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Glass;

class GlassesController extends Controller
{
    public function index() {
        $glasses = Glass::all();
        return view("glasses.index", compact('glasses'));
    }

    public function create() {
        return view("glasses.create");
    }

    public function store(Request $request) {
        $glass = new Glass();
        $glass->name = $request->get('name');
        $newImageName = time().'-'.$request->file('image')->getClientOriginalName();
        $glass->image = $newImageName;
        $request->file('image')->storeAs('image', $newImageName);
        $glass->save();
        return redirect()->route('glasses.index');
    }

    public function edit($id) {
        $glass = Glass::findOrFail($id);
        return view('glasses.edit', compact('glass'));
    }

    public function update(Request $request, $id) {
        $glass = Glass::findOrFail($id);
        $glass->name = $request->get('name');
        $glass->save();
        return redirect()->route('glasses.index');
    }

    public function delete($request) {
        $glass = Glass::destroy($request->get('glass_id'));
        return redirect()->route('glasses.index');
    }
}
