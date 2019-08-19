<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
    	$title = 'Tienda viry y salo';
    	
    	return view('main.home', compact('title'));
    }
}
