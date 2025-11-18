<?php

use App\Http\Controllers\Welcomcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/test/index',[WelcomController::class , "index"]);

Route::get('/admin',[WelcomController::class , "admin"]);
Route::get('/service',[WelcomController::class , "service"]);