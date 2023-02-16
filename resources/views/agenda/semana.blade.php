@extends('layouts.main')

@section('sidebar')

    <x-sb-agenda />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')
<h4 class="text-secondary">AGENDA Diaria</h4>
    @foreach ($tareas as $tarea)
        @foreach ($tarea->tareas as $tar)
            <h3>- {{$tar->Tarea}}</h3>
        @endforeach

    @endforeach

@endsection
