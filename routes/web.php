<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::get('/service', [HomeController::class, 'service']);