@extends('adminlte::page')

@section('title', 'Pendientes')

@section('content_header')
    <h1>Pendientes</h1>
@stop

@section('content')
    <p>Vista para ver pendientes</p>


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
                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Docente</label><br>
                        <input type="checkbox" id="cbox2" value="second_checkbox"> <label
                            for="cbox2">Estudiante</label><br>
                        <input type="checkbox" id="cbox3" value="third_checkbox"> <label for="cbox2">Padre de
                            Familia</label>

                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Docente</label><br>
                        <input type="checkbox" id="cbox2" value="second_checkbox"> <label
                            for="cbox2">Estudiante</label><br>
                        <input type="checkbox" id="cbox3" value="third_checkbox"> <label for="cbox2">Padre de
                            Familia</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox">Docente</label><br>
                        <input type="checkbox" id="cbox2" value="second_checkbox"> <label
                            for="cbox2">Estudiante</label><br>
                        <input type="checkbox" id="cbox3" value="third_checkbox"> <label for="cbox2">Padre de
                            Familia</label>

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
