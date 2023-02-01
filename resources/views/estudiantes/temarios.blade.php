@extends('layouts.estudiantes.app')
@section('titulo','Temarios')
@section('contenido')
<!-- ======= Services Section ======= -->
<section id="services" class="section-bg">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <br>
            <br>
            <h3>Temarios</h3>
            <p>Estas actividades no son calificadas, solo son para mirar el desemvolvimiento del estudiante si
                cumple o no con los esquemas de aprendizaje.</p>
        </header>

        <div class="row justify-content-center">
            @foreach ($temarios as $temario)
            <x-estudiantes.temario title="{{$temario->nombre}}" idTemario="{{$temario->id}}" enlace="{{$temario->enlace}}">
                <p class="description">Estamos Aprendiendo</p>

                @if ($temario->url_imagen)
                <center><img src="{{Storage::url($temario->url_imagen)}}" style="text-align:center;" alt="" width="120" height="120"></center>
                @else
                <div class="ratio ratio-16x9">{!! $temario->url_video  !!}</div>
                @endif

            </x-estudiantes.temario>
            @endforeach

        </div>

    </div>
</section><!-- End Services Section -->
@endsection
