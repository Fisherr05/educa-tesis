@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:estudiantes/>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/livewire.js')}}"></script>

@endsection
