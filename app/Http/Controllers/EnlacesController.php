<?php

namespace App\Http\Controllers;

use App\Models\Link;

use Illuminate\Http\Request;

class EnlacesController extends Controller
{
    public function index()
    {
        $enlaces = Link::all();

        return view('enlaces.home',compact('enlaces'));
    }

    public function store(Request $request)
    {
        return $request->all();

        $link = new Link();
        $link->grupo_id = $request->grupo_id;

        $link->subgrupo_id = $request->sub;
        $incidencia->Descripcion = $request->Descripcion;
        $incidencia->RiesgoA = $request->RiesgoA;
        $incidencia->InformarA = $request->InformarA;
        $incidencia->Remitente = $request->Remitente;
        $incidencia->canal_id = $request->canal_id;
        $incidencia->FechaT = $request->FechaT;
        $incidencia->Propuesta = $request->Propuesta;
        $incidencia->NivelRP = $request->NivelRP;
        $incidencia->ComunicarA = $request->ComunicarA;
        $incidencia->Autoria = $request->Autoria;
        $incidencia->Observaciones = $request->Observaciones;
        $incidencia->Propuestas = $request->Propuestas;
        $incidencia->save();
        return redirect()->route('incidencias.show', $incidencia);
    }
}
