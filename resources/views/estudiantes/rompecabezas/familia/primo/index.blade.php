@extends('layouts.estudiantes.app')
@section('titulo','FAMILIA | Primo')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>FAMILIA | Primo</h1>
       <iframe src="{{ URL::to('/games/familia/primo/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
