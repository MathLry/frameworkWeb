<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Soft;

class SoftsController extends Controller
{
    public function index() {
        $softs = Soft::all();
        return view("softs.index", compact('softs'));
    }

    public function create() {
        $softs = Soft::all();
        return view("softs.create", compact('softs'));
    }

    public function store(Request $request) {
        $soft = new Soft();
        $soft->name = $request->get('name');
        $newImageName = time().'-'.$request->file('image')->getClientOriginalName();
        $soft->image = $newImageName;
        $request->file('image')->storeAs('images', $newImageName);
        $soft->save();
        return redirect()->route('softs.index');
    }

    public function edit($id) {
        $fruit = Soft::findOrFail($id);
        return view('softs.edit', compact('soft'));
    }

    public function update(Request $request, $id) {
        $soft = Soft::findOrFail($id);
        $soft->name = $request->get('name');
        $soft->save();
        return redirect()->route('softs.index');
    }

    public function delete(Request $request) {
        $soft = Soft::destroy($request->get('soft_id'));
        return redirect()->route('softs.index');
    }
}
