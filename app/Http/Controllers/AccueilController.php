<?php

namespace App\Http\Controllers;

class AccueilController extends Controller{
    function index(){
        return view('accueil');
    }

    function adm() {
        return view('admin');
    }
}