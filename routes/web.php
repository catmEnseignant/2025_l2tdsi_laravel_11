<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\WelcomController;


//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/accueil',[AccueilController::class, 'index']);
Route::get('/tester/index',[WelcomController::class, 'index1']);
Route::get('/tester/admin',[WelcomController::class, 'admin']);



// Route :: get('/blog' , function(Request $request) {
//         return "bonjour";
// });


