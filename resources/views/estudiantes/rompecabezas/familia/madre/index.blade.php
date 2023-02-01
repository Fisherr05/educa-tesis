@extends('layouts.estudiantes.app')
@section('titulo','FAMILIA | Madre')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>FAMILIA | Madre</h1>
       <iframe src="{{ URL::to('/games/familia/madre/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
