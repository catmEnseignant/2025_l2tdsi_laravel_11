<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaliController;

Route::get('/diakhala', [MaliController::class, 'index']);
Route::get('/home', [MaliController::class, 'test']);
Route::get('/admin', [MaliController::class, 'admin']);
Route::get('/services', [MaliController::class, 'service']);