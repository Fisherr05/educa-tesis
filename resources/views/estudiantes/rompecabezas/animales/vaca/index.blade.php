@extends('layouts.estudiantes.app')
@section('titulo','ANIMAL | Vaca')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>ANIMAL | Vaca</h1>
       <iframe src="{{ URL::to('/games/animales/vaca/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
