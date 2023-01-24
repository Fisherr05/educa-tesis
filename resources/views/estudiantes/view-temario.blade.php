@extends('layouts.estudiantes.app')
@section('titulo','Vista Temario')
@section('contenido')
<!-- ======= Services Section ======= -->
<section id="services" class="section-bg">
    <div class="container" data-aos="fade-up">
        @foreach ($temarios as $item)
        <header class="section-header">
            <br>
            <br>
            <h3>{{$item->nombre}}</h3>
        </header>

        <div class="row align-items-center">
            <div class="col">
                <center><img src="{{Storage::url($item->url_imagen)}}" alt="" width="300" height="300"></center>
            </div>
            <div class="col ratio ratio-16x9">
                {!! $item->url_video !!}
            </div>
        </div>
        @endforeach
    </div>
</section><!-- End Services Section -->
@endsection
