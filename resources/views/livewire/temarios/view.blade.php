@section('title', __('Temarios'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Temarios </h4>
                        </div>
                        @if (session()->has('message'))
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                            {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
                                placeholder="Buscar Temarios">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Temarios
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.temarios.create')
                    @include('livewire.temarios.update')
                    @if ($temarios->Count())
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead class="thead">
                                <tr>
                                    <td scope="col">#</td>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Multimedia</th>
                                    <th scope="col">Estado</th>
                                    <td scope="col">ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($temarios as $row)
                                <tr></tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nombre }}</td>
                                <td>{{ $row->contenido }}</td>
                                <td>{{ $row->actividad->nombre }}</td>
                                <td>
                                    @isset($row->url_imagen)
                                    <img src="{{ Storage::url($row->url_imagen) }}" alt="" width="80" height="80">
                                    @endisset
                                </td>
                                <td>{{ Str::limit($row->url_video,50) }}</td>
                                <td>{{ $row->estado->nombre}}</td>
                                <td>

                                    <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary"
                                        data-toggle="tooltip" data-placement="bottom" title="Editar"
                                        wire:click="edit({{ $row->id }})"><i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                        title="Eliminar"
                                        onclick="confirm('¿Desea eliminar este temario? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                        wire:click="destroy({{ $row->id }})"><i class="fa fa-trash"></i></a>

                                </td>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $temarios->links() }}
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
