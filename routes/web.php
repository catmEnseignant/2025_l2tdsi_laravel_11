<?php

use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
// Route::get('/', function () {
    
//     return "A'salaamou haleykoum";
// });
Route::get('/Moussa/Gueye', [WelcomController::class, 'index']);

//Route::get('/acceuil',[AcceuilController::class, 'index']);

// Route :: get('/blog' , function(Request $request) {
//         return "bonjour";
// });

