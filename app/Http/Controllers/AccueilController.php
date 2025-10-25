<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index(){
        $age= $_GET['age']; 
       $celiba= false;
        $maries= ['rama','ndoumbe','amina'];
        if($age>18){
            return view('welcome', compact('age','celiba','maries'));
        }else{
            return view('index',compact('age','celiba','maries'));
        }
    }
    //public function index(Request $request)
    //{
        //$age = $request->query('age'); 
       // $celiba = false;
        //$maries = ['rama', 'ndoumbe', 'amina'];

        //if ($age > 18) {
          //  return view('welcome', compact('age', 'celiba', 'maries'));
       // } else {
            //return view('index', compact('age', 'celiba', 'maries'));
       // }
    }
   

