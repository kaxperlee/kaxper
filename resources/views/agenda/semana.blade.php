@extends('layouts.main')

@section('sidebar')

    <x-sb-agenda />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')

<h4 class="text-secondary">AGENDA Diaria</h4>
<table>
    @foreach ($tareas as $tarea)
    <tr>
        <td>{{$tarea->Fecha}} </td>
        <td> {{$tarea->agendaTipo->Tipo}}</td>
        <td>{{$tarea->Tarea}}</td>
        <td>{{$tarea->Tiempo}}</td>
    
    </tr>
    @endforeach
</table>
@endsection
