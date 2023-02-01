@extends('layouts.estudiantes.app')
@section('titulo','Numero 4')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Numero 4</h1>
       <iframe src="{{ URL::to('/games/numeros/numero4/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
