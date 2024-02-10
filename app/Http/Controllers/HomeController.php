<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** Show index page. */
    public function index()
    {
       return view('index');
    }
}
