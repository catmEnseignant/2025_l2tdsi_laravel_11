<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/khalil/home', [HomeController::class, 'index']);
Route::get('/admin', [HomeController::class, 'admin']);