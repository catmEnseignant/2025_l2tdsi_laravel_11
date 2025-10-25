<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index(){
         $age = isset($_GET['age']) ? $_GET['age'] : 0;
         //$age= $_GET['age'];
         $celiba= false;
         $maries= ['rama', 'mary', 'amy'];
        if($age>18){
            return view('welcome', compact('age','celiba','maries'));
        }else{
            return view('index', compact('age','celiba','maries'));
        }
        }
        function admin(){
         
            return view("admin");
        
        }
}

