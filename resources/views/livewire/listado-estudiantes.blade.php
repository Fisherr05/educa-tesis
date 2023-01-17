<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Reporte de Estudiantes </h4>
                                <div>
                                    {{-- <input wire:model='keyWord' type="text" class="form-control" name="search"
                                        id="search" placeholder="Buscar Estudiantes"> --}}
                                    <label for="id_nivel"></label>
                                    <select wire:model="id_nivel" wire:change="changeNivel()" id="id_nivel"
                                        class="form-control" placeholder="Nivel">
                                        <option hidden value="">Seleccione un nivel</option>
                                        @foreach ($niveles as $nivel)
                                            <option value="{{ $nivel->id }}">{{ $nivel->nombre }} - {{ $nivel->paralelo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_nivel')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>
                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif

                        {{-- <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Estudiante
                        </div> --}}
                    </div>
                </div>

                <div class="card-body">

                    {{-- <!-- @if ($estudiantes->count()) --> --}}

                    <div class="table-responsive">
                        @if ($this->listado)
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <td>#</td>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        {{-- <th>Nivel</th>
                                        <th>Paralelo</th> --}}
                                        <td>ACCIONES</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($this->listado as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->user->nombres }}</td>
                                            <td>{{ $row->user->apellidos }}</td>
                                            {{-- <td>{{ $row->nivel }} </td>
                                            <td>{{ $row->paralelo }}</td> --}}
                                            <td>
                                                {{-- <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary" data-toggle="tooltip"
                                                data-placement="bottom" title="Editar" wire:click="edit()"><i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar"
                                                onclick="confirm('¿Desea eliminar este Estudiante? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                wire:click="destroy()"><i class="fa fa-trash"></i>
                                            </a> --}}
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="card-body">
                                <strong>Seleccione un nivel, por favor</strong>
                            </div>
                        @endif
                        {{-- @include('livewire.estudiantes.listado') --}}
                    </div>
                    {{-- <!-- @else

                @endif --> --}}
                </div>
            </div>
        </div>
    </div>
</div>
