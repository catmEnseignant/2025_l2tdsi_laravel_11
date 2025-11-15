<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Mamadou/Tine', [AccueilController::class, 'index']);
Route::get('/admin', [AccueilController::class, 'adm']);