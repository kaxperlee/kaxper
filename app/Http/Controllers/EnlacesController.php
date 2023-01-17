<?php

namespace App\Http\Controllers;

use App\Models\LinkEnlace;
use App\Models\LinkGrupo;
use Illuminate\Http\Request;

class EnlacesController extends Controller
{
    public function index()
    {
        $enlaces = LinkEnlace::all();

        return view('enlaces.home',compact('enlaces'));
    }

    public function store(Request $request)
    {

        return $request->all();
    }
}
