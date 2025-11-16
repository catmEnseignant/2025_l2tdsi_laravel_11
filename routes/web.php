<?php

use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomController::class, 'index']);

Route::get('/admin', [WelcomController::class, 'admin']);
Route::get('/service', [WelcomController::class, 'service']);