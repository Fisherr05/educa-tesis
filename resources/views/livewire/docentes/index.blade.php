@extends('adminlte::page')
@section('plugins.Select2-Bootstrap4', true)

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('docentes')
        </div>
    </div>
</div>
@endsection
@section('plugins.Select2', true)
@section('js')
<script src="{{ asset('js/livewire.js') }}"></script>
@endsection
