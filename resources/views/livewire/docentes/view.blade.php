@section('title', __('Docentes'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Docentes </h4>
                        </div>
                        @if (session()->has('message'))
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                            {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
                                placeholder="Buscar Docentes">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Docente
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @include('livewire.docentes.create')
                    @include('livewire.docentes.update')
                    @if ($docentes->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Niveles</th>
                                    <th>Paralelos</th>
                                    <td>ACCIONES</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($docentes as $docente)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $docente->user->nombres }}</td>
                                    <td>{{ $docente->user->apellidos }}</td>
                                    <td>
                                        @foreach ($docente->niveles as $nivel)
                                        {{ $nivel->nombre }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($docente->niveles as $nivel)
                                        {{$nivel->paralelo}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a id="editar" data-toggle="modal" data-target="#updateModal"
                                            class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                                            title="Editar" wire:click="edit({{ $docente->id }})"><i
                                                class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                            title="Eliminar"
                                            onclick="confirm('¿Desea eliminar este Docente? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                            wire:click="destroy({{ $docente->id }})"><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    @endforeach
                            </tbody>
                        </table>
                        {{ $docentes->links() }}
                    </div>
                    @else
                        <div class="card-body">
                            <strong>No existen datos</strong>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
