<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /** Show index page. */
    public function index()
    {
       return view('index');
    }
}
//return view('greeting', ['name' => 'James']);
