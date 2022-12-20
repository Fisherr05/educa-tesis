@extends('main.layouts.app')

@section('title', 'Unidad Educativa')

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
    @section('tbanner', 'Unidad Educativa')
        @include('main.layouts.inner-banner')

        <!-- section -->
        <div class="section silver_bg ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 margin-top_50">
                        <div class="full float-right_img">
                            <img src="{{ asset('main/images/antecedentes.jpg') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="heading_main text_align_justify">
                                <h2><span>Antecedentes</h2>
                            </div>
                            <div class="full">
                                <p class="text-justify">La discapacidad auditiva es un problema que afecta a niños/as de
                                    diferentes estratos
                                    sociales, pero especialmente a aquellas de escasos recursos económicos, quienes no
                                    pueden insertarse fácilmente a los establecimientos educativos regulares, como tampoco
                                    al proceso productivo de nuestra sociedad.</p>
                                <p class="text-justify"> La discapacidad auditiva de los niños/as se deben a secuelas de
                                    meningitis, sordera
                                    congénitas y adquiridas, en su mayoría no utilizan prótesis auditivas porque acuden a
                                    recibir atención muy tardíamente y por el alto costo de los mismos. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">En un 95% de los (as) estudiantes provienen de hogares de escasos
                                    recursos económicos de
                                    padres sub – empleados, y dedicados a la agricultura y al comercio informal e incluso
                                    analfabetos.</p>
                                <p class="text-justify"> Ante esta realidad, se crea el Instituto de Sordos de Chimborazo
                                    mediante Acuerdo
                                    Ministerial No.- 1200 de fecha 18 de agosto de 1986 con la finalidad de facilitar el
                                    proceso de aprendizaje educativo a personas que padecen de deficiencia auditiva,
                                    hipoacusia y problemas del lenguaje. </p>
                                <p class="text-justify">El ISCH es una institución de servicio social, cuenta con
                                    infraestructura propia, se
                                    encuentra ubicada en la parroquia Maldonado, barrio Villa María, con una extensión de
                                    1200 metros cuadrados de construcción dividido en dos plantas, 17 aulas construidas
                                    especialmente, un salón múltiple, cámara silente, audiómetros, 1 taller equipado de
                                    cerrajería, taller de tarjetería, aulas adaptadas para los talleres de corte,
                                    confección, tarjetería, cancha de uso múltiple, albergue para los niños/as del campo,
                                    servicio higiénicos, espacios verdes, servicios básicos como luz, agua, teléfono,
                                    alcantarillado.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 layout_padding_2">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">El personal Docente está capacitado para realizar las actividades
                                    académicas y
                                    productivas de estudiantes con Deficiencia Auditiva, con la finalidad que sean personas
                                    productivas en la sociedad y no una carga para la misma.</p>
                                <p class="text-justify"> Por ello los perfiles de nuestr@s estudiantes, se enmarcan en el
                                    saber pensar, saber
                                    hacer, saber ser, saber compartir, saber emprender. </p>
                                <p class="text-justify">El crecimiento por década es del 15% de incremento en la población
                                    Deficiente Auditiva
                                    que asiste a este centro educativo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->



        <!-- section -->
        <div class="section layout_padding padding_bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>Historia</span></h2>
                            </div>
                            <div class="full">
                                <p class="text-justify">El Instituto de Sordos de Chimborazo nació como categoría de
                                    Audición y Lenguaje de la
                                    Escuela Especial PESTALOZZI ahora denominado Instituto de Educación Especial “Carlos
                                    Garbay”</p>
                                <p class="text-justify"> En 1.984 se abre el Centro de Sordos Adultos de Chimborazo y se
                                    trabaja en una aula de
                                    la Escuela Simón Bolívar en horario nocturno. </p>
                                <p class="text-justify">El 18 de agosto de 1.986 según Acuerdo Ministerial N1200, se crea el
                                    Instituto de Sordos
                                    de Chimborazo con los estudiantes de la categoría de Audición y Lenguaje y el Centro de
                                    Sordos Adultos de Chimborazo.
                                </p>
                                <p class="text-justify">En 1.987 el Ministerio de Educación asigna el correspondiente
                                    presupuesto que cubre las
                                    necesidades más importantes de la institución como son los sueldos a los maestros y
                                    gastos de servicios básicos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 margin-top_30">
                        <div class="full float-right_img">
                            <img src="{{ asset('main/images/uesch.png') }}" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">
                                    Desde esa fecha los directivos de la institución han logrado que los gobiernos de turno
                                    se preocupen del bienestar de la población Deficiente Auditiva, es así que actualmente
                                    el Instituto de Sordos de Chimborazo cuenta con una planta física de 2 plantas y 15
                                    aulas, un Albergue para los niños/as del sector rural que viven en la institución de
                                    lunes a viernes, con las instalaciones adecuadas podemos dar más cobertura a las
                                    provincias de Bolívar, Tungurahua, Pastaza y Morona Santiago.
                                </p>
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
