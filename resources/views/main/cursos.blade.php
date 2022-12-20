@extends('main.layouts.app')

@section('title', 'Cursos')

@section('content')

    <body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

        <!-- LOADER -->
        <div id="preloader">
            <div class="loader">
                <img src="{{ asset('main/images/loader.gif') }}" alt="Preloader Image" />
            </div>
        </div>
        <!-- END LOADER -->

        @include('main.layouts.header')
    @section('tbanner', 'Cursos')
        @include('main.layouts.inner-banner')


        <!-- section -->
        <div class="section layout_padding padding_bottom-0">
            <div class="container cursos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_main text_align_left">
                            <h2><span>Cursos</span></h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/inicial2.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Inicial 2 </h4>
                                    <p>La edad de ingreso a dicho nivel será de 3 a 4 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/jardin.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Jardin </h4>
                                    <p>La edad de ingreso a dicho nivel será 5 a 6 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/2seg.png') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Segundo de Básica </h4>
                                    <p>La edad de ingreso a dicho nivel será 6 a 7 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/tercero.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Tercero de Básica </h4>
                                    <p>La edad de ingreso a dicho nivel será 7 a 8 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/4to.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Cuarto de Básica </h4>
                                    <p>La edad de ingreso a dicho nivel será de 8 a 9 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/5.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Quinto de Básica </h4>
                                    <p>La edad de ingreso a dicho subnivel será de 9 a 10 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md6">
                                <div class="full">
                                    <img class="img-responsive" src="{{ asset('main/images/cursos/6to.jpg') }}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md6">
                                <div class="full">
                                    <h4> Sexto de Básica </h4>
                                    <p>La edad de ingreso a dicho subnivel será de 10 a 11 años cumplidos hasta 120 días
                                        después del primer día de inicio del año lectivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section -->
        <div class="section margin-top_50 silver_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-top_30">
                        <div class="heading_main text_align_left">
                            <h2><span>Docentes</span></h2>
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('main/images/maestra.png') }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Lcda. Susana Romero</h5>
                                  <p class="card-text">
                                      <p class="text-justify">
                                        Rectora de la Unidad Educativa
                                      </p>
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('main/images/maestra.png') }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Lcda. Olga Monteros</h5>
                                  <p class="card-text">
                                      <p class="text-justify">
                                        Docente Inicial II
                                      </p>
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('main/images/maestra.png') }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Lcda. Susana Romero</h5>
                                  <p class="card-text">
                                      <p class="text-justify">
                                        Docente de Segundo de Básica
                                      </p>
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('main/images/maestra.png') }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Lcda. Susana Romero</h5>
                                  <p class="card-text">
                                      <p class="text-justify">
                                        Docente de Tercero de Básica
                                      </p>
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->



        @include('main.layouts.footer')
        @include('main.layouts.imports-scripts')

    </body>


@stop
