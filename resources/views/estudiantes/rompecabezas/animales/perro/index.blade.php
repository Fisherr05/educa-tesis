@extends('layouts.estudiantes.app')
@section('titulo','ANIMAL | Perro')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>ANIMAL | Perro</h1>
       <iframe src="{{ URL::to('/games/animales/perro/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
