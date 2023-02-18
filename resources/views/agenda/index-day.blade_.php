@extends('layouts.main')

@section('sidebar')

    <x-sb-agenda />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')

<h4 class="text-secondary">AGENDA Diaria</h4>

<div class="container-fluid text-center">
    <div class="row g-2">
        <div class="col-6">
            <div  class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Tareas</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',1) as $tarea)
                        <tr>
                            <td width="10">{{date('d-m-y',strtotime($tarea->Fecha))}}-{{date('w',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                            <td width="5">{{$tarea->Tiempoestimado}}m</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Micro tareas</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',2) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempoestimado}}m</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p>Tareas elefante</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',3) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempoestimado}}m</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p>Investigacion</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',4) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempoestimado}}m</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<div style='margin-bottom:80px;'></div>
@endsection
