@extends('layouts.estudiantes.app')
@section('titulo','Numero 1')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Numero 1</h1>
       <iframe src="{{ URL::to('/games/numeros/numero1/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
