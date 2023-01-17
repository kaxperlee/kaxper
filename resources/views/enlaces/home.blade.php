@extends('layouts.main')

@section('sidebar')

    <x-sb-enlaces />

@endsection

@section('menu')

    <x-menu />

@endsection

@section('body')

<h4 class="text-secondary">ENLACES</h4>
<div class="album py-2 bg-dark">
    <div class="container-fluid">
        <div class="row g-4">
        @foreach ($enlaces as $enlace)
            <div class="col-3">
                <div class="card" style="background-color:#222">
                    <img src="{{asset('images/Enlaces/'.$enlace->id.'.jpg')}}" class="img-fluid" alt="Laravel">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">{{$enlace->Nombre}}</h5>
                        <p class="card-text text-secondary">{{$enlace->Obs}}</p>
                        <a href="{{$enlace->Enlace}}" class="btn btn-secondary">Go</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
