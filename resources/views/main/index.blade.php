@extends('main.layouts.app')

@section('title', 'Principal')

@section('content')

    <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
        <!-- LOADER -->
        <div id="preloader">
            <div class="loader">
                <img src="{{ asset('main/images/loader.gif') }}" alt="Preloader Image" />
            </div>
        </div>
        <!-- END LOADER -->



        @include('main.layouts.header')

        @include('main.layouts.banner-photo');


        <!-- section -->
        <div class="section tabbar_menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab_menu">
                            <ul>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i1.png') }}"
                                                alt="#" /></span><span>Historia</span></a></li>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i2.png') }}"
                                                alt="#" /></span><span>Educación</span></a></li>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i3.png') }}"
                                                alt="#" /></span><span>Deporte</span></a></li>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i4.png') }}"
                                                alt="#" /></span><span>Social</span></a></li>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i5.png') }}"
                                                alt="#" /></span><span>Ubícanos</span></a></li>
                                <li><a href="#contacto"><span class="icon" id="correo"><img
                                                src="{{ asset('main/images/i6.png') }}"
                                                alt="#" /></span><span>Correo</span></a></li>
                                <li><a href="#contacto"><span class="icon"><img src="{{ asset('main/images/i7.png') }}"
                                                alt="#" /></span><span>Llámanos</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section -->
        <div class="section margin-top_50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>Bienvenido a</span> UESC</h2>
                            </div>
                            <div class="full">
                                <p>El ISCH es una institución de servicio social, cuenta con infraestructura propia, se
                                    encuentra ubicada en la parroquia Maldonado, barrio Villa María, con una extensión de
                                    1200
                                    metros cuadrados de construcción dividido en dos plantas, 17 aulas construidas
                                    especialmente, un salón múltiple, cámara silente, audiómetros, 1 taller equipado de
                                    cerrajería, taller de tarjetería, aulas adaptadas para los talleres de corte,
                                    confección,
                                    tarjetería, cancha de uso múltiple, albergue para los niños/as del campo, servicio
                                    higiénicos, espacios verdes, servicios básicos como luz, agua, teléfono, alcantarillado.
                                </p>
                            </div>
                            <div class="full">
                                <a class="hvr-radial-out button-theme" href="{{ url('/info') }}">Saber más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full">
                            <img src="{{ asset('main/images/res01.JPG') }}" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section -->
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span>Conócenos </span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="{{ asset('main/images/mision.png') }}" alt="#" />
                            <a href="{{ url('/info') }}">
                                <h4>Misión</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="{{ asset('main/images/vision.png') }}" alt="#" />
                            <a href="{{ url('/info') }}">
                                <h4>Visión</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="{{ asset('main/images/historia.jpg') }}" alt="#" />
                            <a href="{{ url('/unidadeducativa') }}">
                                <h4>Historia</h4>
                            </a>
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
                    <div class="col-md-6">
                        <div class="full float-right_img">
                            <img src="{{ asset('main/images/informacion.jpg') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>Informacion</h2>
                            </div>
                            <div class="full">
                                <p>La discapacidad auditiva es un problema que afecta a niños/as de diferentes estratos
                                    sociales, pero especialmente a aquellas de escasos recursos económicos, quienes no
                                    pueden
                                    insertarse fácilmente a los establecimientos educativos regulares, como tampoco al
                                    proceso
                                    productivo de nuestra sociedad.</p>
                            </div>
                            <div class="full">
                                <a class="hvr-radial-out button-theme" href="{{ url('/info') }}">Saber más</a>
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
                                <h2><span>Institución</span></h2>
                            </div>
                            <div class="full">
                                <p>Se crea el Instituto de Sordos de Chimborazo mediante Acuerdo Ministerial No.- 1200 de
                                    fecha
                                    18 de agosto de 1986 con la finalidad de facilitar el proceso de aprendizaje educativo a
                                    personas que padecen de deficiencia auditiva, hipoacusia y problemas del lenguaje.</p>

                            </div>
                            <div class="full">
                                <a class="hvr-radial-out button-theme" href="{{ url('/unidadeducativa') }}">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full">
                            {{-- <img class="img-responsive" src="{{ asset('main/images/img7.png') }}" alt="#" /> --}}
                            <iframe width="450" height="300" src="https://www.youtube.com/embed/pauLiXco_-8" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
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
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span>Docentes</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="{{ asset('main/images/maestra.png') }}"
                                                    alt="#" />
                                                <h4>Lcda. Susana Romero</h4>
                                                <p>Rectora de la Unidad Educativa</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="{{ asset('main/images/maestra.png') }}"
                                                    alt="#" />
                                                <h4>Lcda. Olga Monteros</h4>
                                                <p>Docente Inicial II</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="{{ asset('main/images/maestra.png') }}"
                                                    alt="#" />
                                                <h4>Lcda. Susana Romero</h4>
                                                <p>Docente de Segundo de Básica</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="{{ asset('main/images/maestra.png') }}"
                                                    alt="#" />
                                                <h4>Lcda. Susana Romero</h4>
                                                <p>Docente de Segundo de Básica</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

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
