<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomController extends Controller
{
   function index1() {
    return view('index');
}
    function admin() {
     return view('admin');

    }
}