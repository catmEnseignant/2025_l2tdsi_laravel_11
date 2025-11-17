<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function admin(){
        return view('admin');
    }
    public function service(){
        return view('service');
    }
}
