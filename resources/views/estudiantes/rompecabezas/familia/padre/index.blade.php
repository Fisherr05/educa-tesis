@extends('layouts.estudiantes.app')
@section('titulo','FAMILIA | Padre')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>FAMILIA | Padre</h1>
       <iframe src="{{ URL::to('/games/familia/padre/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
