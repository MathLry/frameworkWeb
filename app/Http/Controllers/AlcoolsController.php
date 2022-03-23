<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Alcool;

class AlcoolsController extends Controller
{
    public function index(){
        $type_alcools = Alcool::all();
        // dd($type_alcools);
        return view('alcools.index', compact('type_alcools'));
    }
    public function create(){

        return view('alcools.create');
    }
    public function store(Request $request){
        // dd($request->get('name'));
       $type_alcools = new Alcool();
       $type_alcools->name = $request->get('name');
       $type_alcools->save();
       return redirect()->route('alcools.index');
        
    }
    public function delete($id){
        $type_alcool = Alcool::destroy($id);

        return redirect()->route('alcools.index');
    }
    public function edit($id){
        $type_alcool = Alcool::findOrFail($id);
        return view('alcools.edit',compact('type_alcool'));
    }
    public function update(Request $request,$id){
        $type_alcool = Alcool::findOrFail($id);
        $type_alcool-> name=$request->get('name');
        $type_alcool->save();
        return redirect()->route('alcools.index');

    }
}
    