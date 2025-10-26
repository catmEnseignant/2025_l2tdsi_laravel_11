<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/tester/index',[WelcomeController::class,'index']);
Route::get('/tester/admin',[WelcomeController::class,'admin']);
 


