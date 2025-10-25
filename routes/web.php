<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/test/index', [WelcomeController::class, 'index']);
Route::get('/test/admin', [WelcomeController::class, 'admin']);
