<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\welcomController;
use Illuminate\Support\Facades\Route;

Route::get('/',[welcomController::class,'index']);
Route::get('/tester/index',[welcomController::class,'index1']);
Route::get('/tester/admin',[welcomController::class,'admin']);