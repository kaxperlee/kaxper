<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProgramacionController extends Controller
{
    public function index()
    {
        $codigos = DB::table('codigos')->orderBy('id','asc')->get();
        return view('programacion.home', ['codigos' => $codigos]);
    }
}
