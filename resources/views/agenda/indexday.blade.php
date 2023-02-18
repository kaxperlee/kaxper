@extends('layouts.main')

@section('sidebar')

    <x-sb-agenda />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')

<h4 class="text-secondary mb-4">AGENDA </h4>

<div class="container-fluid text-center">
    <div class="row g-2">
        <div class="col-6">
            <div  class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Intervenciones</p>
                <table class="table table-striped">
                    @foreach ($tareas as $tarea)
                       
                        <tr>
                            <td width="10">{{date('d-m-y',strtotime($tarea->Fecha))}}-{{date('w',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                            <td width="5">{{$tarea->Tiempo}}m</td>
                        </tr>
                        
                    @endforeach
                    <tr>
                        <td align="right" colspan="4">
                            Total tiempo empleado: {{intdiv($tareas->where('agenda_tipo_id',1)->sum('Tiempo'), 60)}} Horas {{$tareas->where('agenda_tipo_id',1)->sum('Tiempo')%60}} minutos
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Tareas</p>
                <table class="table table-striped">
                   
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Micro tareas</p>
                <table class="table table-striped">
                    
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Investigacion</p>
                <table class="table table-striped">
                    
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>Elefantes</p>
                <table class="table table-striped">
                    
                </table>
            </div>
        </div>
    </div>
</div>
<div style='margin-bottom:80px;'></div>
@endsection
