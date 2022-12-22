@section('title', __('Niveles'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Listado de Niveles</h4>
                        </div>
                        <!-- <div wire:poll.60s>
       <code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
      </div> -->
                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search"
                                id="search" placeholder="Buscar en Niveles">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Añadir Nivel
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    @include('livewire.niveles.create')
                    @include('livewire.niveles.update')
                    @if ($niveles->count())
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <td scope="col">#</td>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Paralelo</th>
                                        <td scope="col">Acciones</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($niveles as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nombre }}</td>
                                            <td>{{ $row->paralelo }}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#updateModal"
                                                    class="btn btn-secondary" wire:click="edit({{ $row->id }})"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a class="btn btn-danger"
                                                    onclick="confirm('¿Desea eliminar éste nivel? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                    wire:click="destroy({{ $row->id }})"><i
                                                        class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $niveles->links() }}
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
