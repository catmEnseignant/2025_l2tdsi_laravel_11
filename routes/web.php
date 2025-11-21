<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/admin', [WelcomeController::class, 'admin']);
Route::get('/service', [WelcomeController::class, 'service']);