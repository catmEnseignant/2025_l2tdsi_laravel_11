<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    function index(){
        return view("Welcome");
    }
    //
}
