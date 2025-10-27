<?php

use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;

Route::get('/test/index',[WelcomController::class , "index"]);

Route::get('/tester/admin',[WelcomController::class , "admin"]);