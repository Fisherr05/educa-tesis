@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1>Docentes</h1>
@stop

@section('content')
    <p>Vista para crear docentes</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Nuevo Registro
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro Datos Docente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" action="" method="POST" novalidate>
                    <div class="modal-body">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" id="nombreDocente" name="nombreDocente"
                            placeholder="Ingrese nombre docente" value="" required>
                        <label for="">Apellido:</label>
                        <input type="text" class="form-control" id="apellidoDocente" name="apellidoDocente"
                            placeholder="Ingrese apellido docente" value="" required>
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="emailDocente" name="emailDocente"
                            placeholder="Ingrese email docente" value="" required>
                        <label for="">Telefono:</label>
                        <input type="text" class="form-control" id="telefonoDocente" name="telefonoDocente"
                            placeholder="Ingrese telefono docente" value="" required>
                        <label for="">Dirección:</label>
                        <input type="text" class="form-control" id="direccionDocente" name="direccionDocente"
                            placeholder="Ingrese direccion docente" value="" required>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
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
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
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
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
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
