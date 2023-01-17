<div>
    <div class="mb-4" style="border-bottom: 1px solid #333"></div>
    <!-- Acordion -->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-secondary fs-5 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Enlaces
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                        @foreach ($resultados as $resultado)
                            <li class='pb-1'><a href="#" class="link-secondary">{{$resultado->Grupo}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Acordion -->
    <!-- Form -->
    <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingtwo">
                <button class="accordion-button text-secondary fs-5 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Nuevo enlace
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="accordion-body pt-0">
                    {!! Form::open(['route' => ['enlaces.store'],'method'=>'post']) !!}
                    <div class="my-2">
                        {!! Form::label('id_link_grupos','Grupo:',['class'=>'text-secondary']) !!}
                        {!! Form::select('id_link_grupos',$selectgrupos,NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="my-0">
                        {!! Form::label('Nombre','Título:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Nombre',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('Enlace','Enlace:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Enlace',NULL,['class'=>'form-control border-secondary']) !!}
                    </div>

                    <div class="my-2">
                        {!! Form::label('Obs','Observaciones:',['class'=>'text-secondary']) !!}
                        {!! Form::textarea('Obs',NULL,['class'=>'form-control border-secondary','rows'=>'3', 'style'=>'resize: none']) !!}
                    </div>
                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit"  class="btn btn-secondary btn-sm me-2"><i class="fa-solid fa-ban"></i>Aceptar</button>
                    </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /Form -->
</div>
