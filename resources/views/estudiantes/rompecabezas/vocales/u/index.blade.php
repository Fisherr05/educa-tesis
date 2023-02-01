@extends('layouts.estudiantes.app')
@section('titulo','Letra U')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Letra U</h1>
       <iframe src="{{ URL::to('/games/vocalu/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
