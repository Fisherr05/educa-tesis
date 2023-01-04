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
            <x-estudiantes.temario title="{{$temario->nombre}}">
                <p class="description">Estamos Aprendiendo</p>

                @isset($temario->multimedias)
                @if ($temario->multimedias->imagen == true)
                <center><img src="{{Storage::url($temario->multimedias->url)}}" style="text-align:center;" alt="" width="120" height="120"></center>
                @else
                <div class="ratio ratio-16x9">{!! $temario->multimedias->url  !!}</div>
                @endif
                @endisset

            </x-estudiantes.temario>
            @endforeach

        </div>

    </div>
</section><!-- End Services Section -->
@endsection