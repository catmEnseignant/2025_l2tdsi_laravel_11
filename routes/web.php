<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/index', [WelcomeController::class, 'index']
);
Route::get('/admin', [WelcomeController::class, 'admin']
)->name('admin');
Route::get('/service', [WelcomeController::class, 'service']
)->name('service');