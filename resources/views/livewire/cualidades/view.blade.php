@section('title', __('Cualidades'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Cualidades </h4>
                        </div>

                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search"
                                id="search" placeholder="Buscar Cualidades">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Cualidades
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.cualidades.create')
                    @include('livewire.cualidades.update')
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead class="thead">
                                <tr>
                                    <td scope="col">#</td>
                                    <th scope="col">Nombre</th>
                                    <td scope="col">Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cualidades as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nombre }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Editar"
                                                wire:click="edit({{ $row->id }})"><i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger"data-toggle="tooltip" data-placement="bottom" title="Eliminar"
                                                onclick="confirm('¿Desea eliminar esta cualidad? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                wire:click="destroy({{ $row->id }})"><i class="fa fa-trash"></i>
                                                </a>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $cualidades->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
