<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function all(){
        $cats = Cat::all();
        return $cats ;
    }
}
