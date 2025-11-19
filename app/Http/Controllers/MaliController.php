<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaliController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function test()
    {
        return view('test');
    }

       function admin()
    {
        return view('admin');
    }

      function service()
    {
        return view('service');
    }
}

