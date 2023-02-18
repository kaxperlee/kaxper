@extends('layouts.main')

@section('sidebar')

    <x-sb-agenda />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')

<h4 class="text-secondary mb-4">AGENDA</h4>

<div class="container-fluid text-center">
    <div class="row g-2">
        <div class="col-6">
            <div  class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>TAREAS</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',1) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempo}}m</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td align="right" colspan="4">Total tiempo empleado: {{intdiv($tareas->where('agenda_tipo_id',1)->sum('Tiempo'), 60)}} Horas {{$tareas->where('agenda_tipo_id',1)->sum('Tiempo')%60}} minutos</td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border border-secondary-subtle text-left">
                <p style='text-transform: uppercase;'>SIN FECHA</p>
                <table class="table table-striped">
                    @foreach ($sinfechas->where('agenda_tipo_id',5) as $sinfecha)
                        <tr>
                            <td>- {{$sinfecha->Tarea}}</td>
                            <td>{{$sinfecha->Tiempoestimado}}m</td>
                            <td>{{$sinfecha->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p>MICROTAREAS</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',2) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempo}}m</td>
                            <td>{{$tarea->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p>ELEFANTES</p>
                <table class="table table-striped">
                    @foreach ($sinfechas->where('agenda_tipo_id',3) as $sinfecha)
                        <tr>
                            <td>{{$sinfecha->Tarea}}</td>
                            <td>{{$sinfecha->agendaDestinatario->Nombre}}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
        <div class="col-12">
            <div class="p-3 border border-secondary-subtle text-left">
                <p>INVESTIGACIÓN</p>
                <table class="table table-striped">
                    @foreach ($tareas->where('agenda_tipo_id',4) as $tarea)
                        <tr>
                            <td>{{date('d-m-y',strtotime($tarea->Fecha))}}</td>
                            <td>{{$tarea->Tarea}}</td>
                            <td>{{$tarea->Tiempo}}m</td>
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
