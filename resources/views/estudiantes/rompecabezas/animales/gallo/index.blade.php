@extends('layouts.estudiantes.app')
@section('titulo','ANIMAL | Gallo')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>ANIMAL | Gallo</h1>
       <iframe src="{{ URL::to('/games/animales/gallo/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
