@extends('layouts.estudiantes.app')
@section('titulo','Numero 5')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Numero 5</h1>
       <iframe src="{{ URL::to('/games/vocalu/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
