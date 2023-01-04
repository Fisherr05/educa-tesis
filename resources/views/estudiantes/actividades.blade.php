@extends('layouts.estudiantes.app')
@section('titulo','Actividades')
@section('contenido')
    <!-- ======= Services Section ======= -->
<section id="services" class="section-bg">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <br>
            <br>
            <h3>Actividades</h3>
            <p>Estas actividades no son calificadas, solo son para mirar el desemvolvimiento del estudiante si
                cumple o no con los esquemas de aprendizaje.</p>
        </header>

        <div class="row justify-content-center">
            @foreach ($actividades as $actividad)
            <x-estudiantes.actividad title="{{$actividad->nombre}}" idActividad="{{$actividad->id}}">
                <p class="description">Estamos Aprendiendo</p>
            </x-estudiantes.actividad>
            @endforeach

        </div>

    </div>
</section><!-- End Services Section -->
@endsection
