
@extends('layouts.main')

@section('sidebar')
<div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <!-- Acordion -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-secondary fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Inicio
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-0">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                                <li class='pb-1'><a href="#" class="link-secondary">Inicio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- /Acordion -->
       
@endsection

@section('menu')
   
    <x-menu />
       
@endsection

@section('body')
   
<h4 class="text-secondary">INICIO</h4>
       
@endsection