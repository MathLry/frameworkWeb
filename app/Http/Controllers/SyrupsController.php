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
}
