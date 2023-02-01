@extends('layouts.estudiantes.app')
@section('titulo','Letra O')
@section('contenido')
<section id="services" class="section-bg">
    <div class="container">
    <br>
       <h1>Letra O</h1>
       <iframe src="{{ URL::to('/games/vocalo/index.html') }}" width="100%" height="700" allowFullScreen="true"></iframe>
    </div>
</section>
@endsection
