<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/cats',[CatController::class, 'all']) ;
Route::get('/cats/show/{id}',[CatController::class, 'show']) ;
