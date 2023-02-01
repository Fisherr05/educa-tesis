@extends('layouts.estudiantes.app')
@section('titulo','Letra A')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Letra A</h1>
       <iframe src="{{ URL::to('/games/vocala/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
