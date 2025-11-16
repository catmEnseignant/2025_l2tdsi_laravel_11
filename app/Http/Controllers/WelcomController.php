<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    function index () {
        return view("home");

    }

     function admin () {
        return view("admin");

    }

     function service()
    {
        return view('service');
    }
}
