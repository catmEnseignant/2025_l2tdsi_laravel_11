<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    function index1(){
        return view('welcome');
    }

    function admin(){
        return view('layouts/master');
    }
    function service(){
       return view('services');
    }

}