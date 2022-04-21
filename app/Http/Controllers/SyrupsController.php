<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Syrup;

class SyrupsController extends Controller
{
    public function index() {
        $syrups = Syrup::all();
        return view("syrups.index", compact('syrups'));
    }

    public function create() {
        $syrups = Syrup::all();
        return view("syrups.create", compact('syrups'));
    }

    public function store(Request $request) {
        $syrup = new Syrup();
        $syrup->name = $request->get('name');
        $syrup->save();
        return redirect()->route('syrups.index');
    }

    public function edit($id) {
        $fruit = Syrup::findOrFail($id);
        return view('syrups.edit', compact('syrup'));
    }

    public function update(Request $request, $id) {
        $syrup = Syrup::findOrFail($id);
        $syrup->name = $request->get('name');
        $syrup->save();
        return redirect()->route('syrups.index');
    }

    public function delete(Request $request) {
        $syrup = Syrup::destroy($request->get('syrup_id'));
        return redirect()->route('syrups.index');
    }
}

