@section('title', __('Temarios'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Temario Listing </h4>
                        </div>
                        <div wire:poll.60s>
                            <code>
                                <h5>{{ now()->format('H:i:s') }} UTC</h5>
                            </code>
                        </div>
                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search"
                                id="search" placeholder="Search Temarios">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Temarios
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.temarios.create')
                    @include('livewire.temarios.update')
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead class="thead">
                                <tr>
                                    <td scope="col">#</td>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Alt Imagen</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Id Actividad</th>
                                    <th scope="col">Id Estado</th>
                                    <td scope="col">ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($temarios as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nombre }}</td>
                                        <td>{{ $row->imagen }}</td>
                                        <td>{{ $row->alt_imagen }}</td>
                                        <td>{{ $row->video }}</td>
                                        <td>{{ $row->contenido }}</td>
                                        <td>{{ $row->id_actividad }}</td>
                                        <td>{{ $row->id_estado }}</td>
                                        <td>

                                            <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary"
                                                wire:click="edit({{ $row->id }})"><i class="fa fa-edit"></i> </a>
                                            <a class="btn btn-danger"
                                                onclick="confirm('¿Desea eliminar este temario? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                wire:click="destroy({{ $row->id }})"><i
                                                    class="fa fa-trash"></i></a>

                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $temarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
