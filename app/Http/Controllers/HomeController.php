<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show index page.
    public function index(Request $request)
    {
        $flash_message = $request->session()->get('flash_message');
        return view('index', ['flash_message' => $flash_message]);
    }
}
