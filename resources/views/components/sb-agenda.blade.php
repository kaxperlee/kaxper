<div>
    <div class="mb-4" style="border-bottom: 1px solid #333"></div>

    <!-- Acordion -->
    <div class="accordion mb-3" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-secondary fs-4 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    AGENDA
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show mt-2" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="accordion-body pt-2">
                    <a href="{{route('agenda.indexday',date('Y-m-d'))}}"><i class="fa-solid fa-calendar-day fa-2xl text-secondary pe-3"></i></a>
                    <a href="{{route('agenda.indexWeek',date('W'))}}"><i class="fa-solid fa-calendar-week fa-2xl text-secondary pe-3"></i></a>
                    <a href="{{route('agenda.index',date('Y-m-d'))}}"><i class="fa-solid fa-calendar-days fa-2xl text-secondary"></i></a>
                </div>
                <x-aux-calendar fontsize="fs-6" dia="" mes="" ano="" />
                <x-aux-semana fontsize="fs-6"  mes="" ano="" />
                <x-aux-mes fontsize="fs-6"  ano="" />
            </div>
        </div>
    </div>
    <!-- /Acordion -->
    <!-- Form -->
    <div class="accordion" id="accordionExample2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingtwo">
                <button class="accordion-button text-secondary fs-4 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Nueva tarea
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="accordion-body pt-0">
                    {!! Form::open(['route' => ['tarea.store'],'method'=>'post']) !!}
                    <div class="my-2">
                        {!! Form::label('Tarea','Tarea:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Tarea',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('Descripcion','Descripción:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Descripcion',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('agenda_tipo_id','Tipo:',['class'=>'text-secondary']) !!}
                        {!! Form::select('agenda_tipo_id',$agendatipo,NULL,['placeholder' => 'Selecciona un tipo','class'=>'form-control border-secondary']) !!}
                    </div>

                    <div class="my-2">
                        {!! Form::label('Tiempoestimado','Tiempo estimado:',['class'=>'text-secondary']) !!}
                        {!! Form::text('Tiempoestimado',NULL,['class'=>'form-control border-secondary' ]) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('Fecha','Fecha:',['class'=>'text-secondary']) !!}
                        {!! Form::date('Fecha',NULL,['class'=>'form-control']) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('Hora','Hora:',['class'=>'text-secondary']) !!}
                        {!! Form::time('Hora',NULL,['class'=>'form-control']) !!}
                    </div>
                    <div class="my-2">
                        {!! Form::label('agenda_destinatario_id','Destinatario:',['class'=>'text-secondary']) !!}
                        {!! Form::select('agenda_destinatario_id',$agendadestinatario,NULL,['placeholder' => 'Selecciona un destinatario','class'=>'form-control border-secondary']) !!}
                    </div>


                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit"  class="btn btn-secondary btn-sm me-2">Aceptar</button>
                    </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /Form -->
</div>
