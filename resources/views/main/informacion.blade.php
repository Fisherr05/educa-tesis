@extends('main.layouts.app')

@section('title', 'Información')

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
    @section('tbanner', 'Información')
        @include('main.layouts.inner-banner')

        <!-- section -->
        <div class="section layout_padding padding_bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>Misión</span></h2>
                            </div>
                            <div class="full">
                                <p>El Instituto de Sordos de Chimborazo atiende a niños, jóvenes en habilitación,
                                    rehabilitación y educación inicial, básica, bachillerato y primaria Popular en las
                                    especialidades de Agropecuario Forestal, Manualidades y Artesanías, con una cobertura al
                                    medio rural y urbano de la zona central del país, con programas de Estimulación
                                    Temprana, Ambulatorio, Educación General Básica, Colegio a Distancia, Talleres, Albergue
                                    para los niños del campo y servicio de audiometrías a la comunidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full">
                            <img class="img-responsive" src="{{ asset('main/images/mision.png') }}" alt="#" />
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
                            <img src="{{ asset('main/images/vision-info.JPG') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>Visión</h2>
                            </div>
                            <div class="full">
                                <p>La discapacidad auditiva es un problema que afecta a niños/as de diferentes estratos
                                    sociales, pero especialmente a aquellas de escasos recursos económicos, quienes no
                                    pueden
                                    insertarse fácilmente a los establecimientos educativos regulares, como tampoco al
                                    proceso
                                    productivo de nuestra sociedad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->


        <!-- section -->
        <div class="section silver_bg ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 layout_padding_2">
                        <div class="full">
                            <div class="heading_main text_align_justify">
                                <h2><span>SIGNOS DE ALERTA EN EL DESARROLLO INFANTIL.</h2>
                            </div>
                            <div class="full">
                                <p class="text-justify">Si un niño presenta una o más de las siguientes conductas, por favor
                                    acérquese a una Unidad de Estimulación Temprana.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full float-right_img">
                            <img src="{{ asset('main/images/desarrollo-infantil.png') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>RECIEN NACIDO</h4>
                                <p class="text-justify"> Llanto débil y ocasional</p>
                                <p class="text-justify"> Pocos movimientos</p>
                                <p class="text-justify"> Muy frio, muy flojito</p>
                                <p class="text-justify"> No duerme</p>
                                <p class="text-justify"> Permanece muy flojo o muy rígido</p>
                                <p class="text-justify"> No lacta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>3 MESES</h4>
                                <p class="text-justify"> No responde a una sonrisa.</p>
                                <p class="text-justify"> No sigue objetos o personas con la mirada</p>
                                <p class="text-justify"> No se interesa e su madre</p>
                                <p class="text-justify"> No sostiene la cabeza</p>
                                <p class="text-justify"> Permanece muy flojo o muy rígido</p>
                                <p class="text-justify"> Muy irritable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>6 MESES</h4>
                                <p class="text-justify"> No extiende los brazos para que lo cojan</p>
                                <p class="text-justify"> Rigidez de brazos y piernas; cuello y cuerpos flojos</p>
                                <p class="text-justify"> No se sienta con apoyo</p>
                                <p class="text-justify"> Sentado con apoyo no sostiene la cabeza</p>
                                <p class="text-justify"> Sueño irregular, intranquilo</p>
                                <p class="text-justify"> No coge juguetes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>9 MESES</h4>
                                <p class="text-justify"> Rigidez de piernas</p>
                                <p class="text-justify"> Flojo de cuerpo</p>
                                <p class="text-justify"> No coge juguetes ni juega con las manos</p>
                                <p class="text-justify"> No se sienta</p>
                                <p class="text-justify"> Ausencia de balbuceo(ma, pa, ta)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>12 MESES</h4>
                                <p class="text-justify"> No se sostiene de pie</p>
                                <p class="text-justify"> No responde a caricias</p>
                                <p class="text-justify"> No dice mamá, papá, teta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>18 MESES</h4>
                                <p class="text-justify"> No camina</p>
                                <p class="text-justify"> No dice 8 – 10 palabras con significado</p>
                                <p class="text-justify"> No atiende por mucho tiempo, cambia de actividad comúnmente</p>
                                <p class="text-justify"> No imita juegos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>24 MESES</h4>
                                <p class="text-justify"> No colabora en su alimentación y en el vestirse</p>
                                <p class="text-justify"> No cumple órdenes sencillas</p>
                                <p class="text-justify"> No une dos palabras</p>
                                <p class="text-justify"> Babea constante</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <h4>CUALQUIER EDAD</h4>
                                <p class="text-justify"> Cabeza muy grande o muy pequeña</p>
                                <p class="text-justify"> Movimientos anormales de ojos, manos, cabeza</p>
                                <p class="text-justify"> Anormalidades físicas</p>
                                <p class="text-justify"> Convulsiones</p>
                                <p class="text-justify"> No escucha, no sigue con la mirada</p>
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
                    <div class="col-md-6 margin-top_30">
                        <div class="full float-right_img">
                            <img src="{{ asset('main/images/lenguaje.jpg') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <h2><span>COMO HABLAR A LAS PERSONAS CON DEFICIT AUDITIVO</span></h2>
                            </div>
                            <div class="full">
                                <p class="text-justify">No olvide: el sordo no le oye ni se oye
                                    Muchos sordos no le comprenden mas que leyendo sus labios</p>
                                <p class="text-justify"> No le hable nunca sin que le pueda mirar. Es necesario que llame su
                                    atención con una seña antes de hablar. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">En un curso, en una conferencia, etc. cuide que el rostro este bien
                                    situado</p>
                                <p class="text-justify">En clases el niño sordo o con alguna dificultad auditiva debe estar
                                    situado en primera fila.</p>
                                <p class="text-justify"> Colóquese de modo que su cara esté a plena luz.</p>
                                <p class="text-justify">No mantenga ningún objeto en sus labios mientras habla, ni ponga la
                                    mano delante de la boca</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">Sitúese a su altura (si se trata de un niño con mayor motivo)</p>
                                <p class="text-justify">Vocalice bien, pero sin exagerar y sin gritar.</p>
                                <p class="text-justify">Háblele despacio</p>
                                <p class="text-justify">Construya frases cortas, correctas y simples.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="full">
                                <p class="text-justify">Si es necesario ayude a la comunicación con un gesto o una palabra
                                    escrita.</p>
                                <p class="text-justify">El sordo se encuentra fácilmente aislado entre los oyentes.</p>
                                <p class="text-justify">Con frecuencia tiene la sensación de estar marginado, piense en esto
                                    cuando se encuentre con un sordo.</p>
                                <p class="text-justify">Dedíquele un poco de su atención.</p>
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
