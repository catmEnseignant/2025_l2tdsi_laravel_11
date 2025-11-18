
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomController;

Route::get('/index', [WelcomController::class, 'index']
);
Route::get('/admin', [WelcomController::class, 'admin']
)->name('admin');
Route::get('/service', [WelcomController::class, 'service']
)->name('service');
