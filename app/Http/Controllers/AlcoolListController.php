<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlcoolList;
use App\Models\Alcool;

class AlcoolListController extends Controller
{
    public function index(){
        
        $list_alcools = AlcoolList::all();
        return view('listAlcool.index', compact('list_alcools'));
    }
    public function create(){
        $type_alcools = Alcool::all();
        return view('listAlcool.create',compact('type_alcools'));
    }
    public function store(Request $request){
        // dd($request->get('name'));
       $list_alcools = new AlcoolList();
       $list_alcools->name = $request->get('name',);
       $list_alcools->degre = $request->get('degre');
       $list_alcools->alcool_type = $request->get('alcool_type');
       $list_alcools->save();
       return redirect()->route('listAlcool.index');
        
    }

}
