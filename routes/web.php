<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\AccueilController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil',[AccueilController::class, 'index']);

// Route :: get('/blog' , function(Request $request) {
//         return "bonjour";
// });


