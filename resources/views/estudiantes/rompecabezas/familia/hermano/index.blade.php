@extends('layouts.estudiantes.app')
@section('titulo','FAMILIA | Hermano')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>FAMILIA | Hermano</h1>
       <iframe src="{{ URL::to('/games/familia/hermano/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
