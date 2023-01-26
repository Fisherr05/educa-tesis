@extends('adminlte::page')
@section('title','Asignar Roles')
@section('content_header')
<h1>Listado de Usuarios</h1>
@stop
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('admin.user-index')
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
