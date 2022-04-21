<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soft;
use App\Models\Syrup;
use App\Models\Fruit;
use App\Models\Glass;
use App\Models\Alcool;
use App\Models\cocktails;

class cocktailsController extends Controller
{
    public function index(){
        
        $list_cocktails = cocktails::all();
        return view('cocktails.cocktail', compact('list_cocktails'));
    }
    public function cocktail(){

        $types_Of_Alcohol = Alcool::all();
        $glasses = Glass::all();
        $fruits = Fruit::all();
        $softs = Soft::all();
        $syrups = Syrup::all();
        $cocktails =cocktails::all();
         
        return view("cocktails.index", compact('softs','syrups', 'fruits', 'glasses', 'types_Of_Alcohol'));
    }
}
