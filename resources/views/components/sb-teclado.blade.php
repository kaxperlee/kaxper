<div>

    <div class="mb-4" style="border-bottom: 1px solid #333"></div>
    <!-- Acordion -->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-secondary fs-5 py-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Tutoriales
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                        @foreach ($subgrupos as $subgrupo)
                            <li class='pb-1'><a href="#" class='link-secondary'>{{$subgrupo->Subgrupo}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed text-secondary  fs-5 py-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    Nuevo tutorial
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {!! Form::open(['route' => 'enlaces.store', 'files' => true]) !!}
                    <div class="">
                        {!! Form::label('Subgrupo','Subgrupo:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Subgrupo',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="mt-2">
                        {!! Form::label('Titulo','Título:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Titulo',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="mt-2">
                        {!! Form::label('Descripcion','Descripción:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Descripcion',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="mt-2">
                        {!! Form::label('File','Video:',['class'=>'text-secondary']) !!}
                        {!! Form::file('File',['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="col my-2">
                        <button class="btn btn-secondary" type="submit">Enviar</button>
                    </div>
                    {!! Form::hidden('Grupo',2) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /Acordion -->
</div>
