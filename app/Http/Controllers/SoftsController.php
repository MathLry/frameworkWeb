<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Soft;
use App\Models\Syrup;
use App\Models\Fruit;
use App\Models\Glasse;
use App\Models\TypeOfAlcohol;
use App\Models\cocktails;

class SoftsController extends Controller
{
    public function index(){

        $types_Of_Alcohol = TypeOfAlcohol::all();
        $glasses = Glasse::all();
        $fruits = Fruit::all();
        $softs = Soft::all();
        $syrups = Syrup::all();
        $cocktails =cocktails::all();
         
        return view("cocktails.index", compact('softs','syrups', 'fruits', 'glasses', 'types_Of_Alcohol'));
    }
    public function store(Request $request){
         //dd($request->get('choix'));
      $cocktails = new cocktails();
       
       $cocktails->name =implode(",",$request->get('choix'));
    $cocktails->save();
       return redirect()->route('cocktails.index');
        
    }
} 
 