<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function all(){
        $cats = Cat::all();
        return view('cats.all' ,compact('cats')) ;
    }

    public function show($id){
        $cat =Cat::findOrFail($id) ;
        return view('cats.show', compact('cat')) ;
    }

}
