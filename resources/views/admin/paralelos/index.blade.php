@extends('adminlte::page')

@section('title', 'Paralelo')

@section('content_header')
    <h1>Paralelos</h1>
@stop

@section('content')
    <p>Index para paralelo</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Nuevo Registro
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" action="" method="POST" novalidate>
                    <div class="modal-body">
                        <label for="">Nivel:</label>
                        <input type="text" class="form-control" id="nivel" name="nivel"
                            placeholder="Ingrese el nivel" value="" required>
                        <label for="">Paralelo:</label>
                        <input type="text" class="form-control" id="paralelo" name="paralelo"
                            placeholder="Ingrese el paralelo" value="" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="card-body table-responsive">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Paralelo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Primero</td>
                    <td>A</td>
                    <td>
                        <form action="" method="POST">
                            <a href="" class="btn btn-secondary"><i
                                    class="fas fa-pencil-alt"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Desea eliminar esto?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Segundo</td>
                    <td>A</td>
                    <td>
                        <form action="" method="POST">
                            <a href="" class="btn btn-secondary"><i
                                    class="fas fa-pencil-alt"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Desea eliminar esto?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Tercero</td>
                    <td>A</td>
                    <td>
                        <form action="" method="POST">
                            <a href="" class="btn btn-secondary"><i
                                    class="fas fa-pencil-alt"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Desea eliminar esto?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
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
