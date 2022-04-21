<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cocktails;

class cocktailsController extends Controller
{
    public function index(){
        
        $list_cocktails = cocktails::all();
        return view('cocktails.cocktail', compact('list_cocktails'));
    }
}
