@extends('adminlte::page')
@section('title', 'Nuevo Rol')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Nuevo rol
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'amin,roles.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'name') !!}
                    {!! Form::text($name, $value, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del rol']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
@stop
