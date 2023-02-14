<div>

    <div class="mb-4" style="border-bottom: 1px solid #333"></div>
    <!-- Acordion -->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-secondary fs-5 py-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Enlaces
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
                    Diseño y recursos
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                        <li class='pb-1'><a href="#" class="link-secondary">Laravel</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed text-secondary fs-5 py-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    Música
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">

                </div>
            </div>
        </div>
    </div>
    <!-- /Acordion -->


</div>
