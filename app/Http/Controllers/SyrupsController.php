<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Syrup;

class SyrupsController extends Controller
{
    public function index(){

        $syrups = Syrup::all();
         
        return view("cocktails.index", compact('syrups'));
    }
    public function store(Request $request){
        dd($request->get('choix[]'));
    //    $type_alcools = new Alcool();
    //    $type_alcools->name = $request->get('name');
    //    $type_alcools->save();
    //    return redirect()->route('alcools.index');
        
    }
}