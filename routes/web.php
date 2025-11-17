<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

Route::get('/', function () {
    return view('welcomes');
});

Route::get('/', [AccueilController::class, "index"]);
Route::get('/admin', [AccueilController::class, "admin"]);

