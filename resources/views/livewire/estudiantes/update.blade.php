<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    {{-- <div class="form-group">
                        <label for="id_usuario"></label>
                        <input wire:model="id_usuario" type="text" class="form-control" id="id_usuario"
                            placeholder="Id Usuario">
                        @error('id_usuario')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_nivel"></label>
                        <input wire:model="id_nivel" type="text" class="form-control" id="id_nivel"
                            placeholder="Id Nivel">
                        @error('id_nivel')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="id_nivel"></label>
                        <select wire:model="id_nivel" id="id_nivel" class="form-control" placeholder="Nivel">
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
                    <div class="form-group">
                        <label for="nombres"></label>
                        <input wire:model="nombres" type="text" class="form-control" id="nombres"
                            placeholder="Nombres">
                        @error('nombres')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellidos"></label>
                        <input wire:model="apellidos" type="text" class="form-control" id="apellidos"
                            placeholder="Apellidos">
                        @error('apellidos')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion"></label>
                        <input wire:model="direccion" type="text" class="form-control" id="direccion"
                            placeholder="Direccion">
                        @error('direccion')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono"></label>
                        <input wire:model="telefono" type="text" class="form-control" id="telefono"
                            placeholder="Telefono">
                        @error('telefono')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model="email" type="text" class="form-control" id="email"
                            placeholder="Email">
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <button type="button" wire:click="updatePassword()"class="btn btn-primary" id="remove"><i
                                class="far fa-edit"> </i>Cambiar Contraseña</button>
                    </div>
                    @if ($updatePassword == true)
                        <div class="form-group">
                            <label for="password"></label>
                            <input wire:model="password" type="password" class="form-control" id="password"
                                placeholder="Contraseña">
                            @error('password')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation"></label>
                            <input wire:model="password_confirmation" type="password" class="form-control"
                                id="password_confirmation" placeholder="Confirmar Contraseña">
                            @error('password_confirmation')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary close-btn"
                    data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
