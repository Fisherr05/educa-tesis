<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Usuario Pendiente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    {{-- <div class="form-group">
                        <label for="nombres"></label>
                        <input wire:model="nombres" type="text" class="form-control" id="nombres"
                            placeholder="Nombres">@error('nombres') <span class="error text-danger">{{ $message
                            }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellidos"></label>
                        <input wire:model="apellidos" type="text" class="form-control" id="apellidos"
                            placeholder="Apellidos">@error('apellidos') <span class="error text-danger">{{ $message
                            }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="direccion"></label>
                        <input wire:model="direccion" type="text" class="form-control" id="direccion"
                            placeholder="Direccion">@error('direccion') <span class="error text-danger">{{ $message
                            }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono"></label>
                        <input wire:model="telefono" type="text" class="form-control" id="telefono"
                            placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message
                            }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tipo"></label>
                        <input wire:model="tipo" type="text" class="form-control" id="tipo"
                            placeholder="Tipo">@error('tipo') <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model="email" type="text" class="form-control" id="email"
                            placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input wire:model="password" type="password" class="form-control" id="password"
                            placeholder="Contraseña">@error('password') <span
                            class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"></label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                            placeholder="{{ __('Confirm Password') }}">@error('password') <span
                            class="error text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="nivel"></label>
                        <select wire:model="nivel" id="nivel" class="form-control" placeholder="Nivel">
                            <option hidden value="">Seleccione un nivel</option>
                            @foreach ($niveles as $nivel)
                                <option value="{{ $nivel->id }}">{{ $nivel->nombre }} - {{$nivel->paralelo}}</option>
                            @endforeach
                        </select>
                        @error('nivel')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="guardarEstudiante()" class="btn btn-primary"
                    >Aprobar</button>
            </div>
        </div>
    </div>
</div>
