<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TecladoController extends Controller
{
    public function index()
    {
        //return "Hola";
        $enlaces = Link::where('Grupo','Teclado')->get();
        ;
        return view('teclado.index',compact('enlaces'));
    }
    public function fichero(){
        $files = Storage::disk('ftp')->allfiles();
        dd($files);
    }
}
