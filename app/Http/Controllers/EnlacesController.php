<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnlacesController extends Controller
{
    public function index()
    {
        return view('enlaces.home');
    }
}
