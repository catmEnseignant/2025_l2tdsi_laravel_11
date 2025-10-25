<?php

use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;

Route::get('/diakhala/konte', [WelcomController::class, 'index']);
