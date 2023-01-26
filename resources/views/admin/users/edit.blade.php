@extends('adminlte::page')
@section('title','Asignar Roles')
@section('content_header')
<h1>Asignar un Rol </h1>
@stop
@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="h5">Nombre de Usuario:</p>
                    <p class="form-control">{{$user->nombres}} {{$user->apellidos}}</p>

                    <p class="h5">Listado de Roles</p>
                    {!! Form::model($user,['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                    @foreach ($roles as $rol)
                        <div>
                            <label for="">
                                {!! Form::checkbox('roles[]', $rol->id, null, ['class'=> 'mr-1']) !!}
                                {{$rol->name}}
                            </label>
                        </div>
                    @endforeach

                    {!! Form::submit('Guardar', ['class'=>'btn btn-primary mt-2']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
