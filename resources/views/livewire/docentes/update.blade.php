<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Docente</h5>
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
                    </div> --}}
                    <div wire:ignore class="form-group">
                        <label for="id_nivel"></label>
                        <select wire:model="niveles_selected" id="id-nivel-edit" class="form-control"
                            placeholder="Nivel" style="width: 100%" multiple>
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
                        <input wire:model="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres">
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
                        <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">
                        @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <button type="button" wire:click="updatePassword()" class="btn btn-primary" id="remove"><i
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    document.addEventListener('livewire:load', function (){         //cuando el componente de livewire ya ha sido renderizado
        var nivel = $('#id-nivel-edit');
        var paramsSelect2={
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass(
                'w-100') ? '100%' : 'style',
            placeholder: "Seleccione uno o varios niveles",
            allowClear: Boolean($(this).data('allow-clear')),
            closeOnSelect: !$(this).attr('multiple'),
            language: "es",
        };
        nivel.select2(paramsSelect2);
        nivel.on('change', function (){
            @this.set('niveles_selected', $(this).val());           //envía el valor del elemento HTML a la variable php de livewire
        });
        @this.on('cargarNiveles', function () {                     //escucha el evento desde livewire
            var niveles = @this.niveles_selected;                   //guarda la variable php de livewire en una variable javascript
            nivel.val(niveles).trigger('change');                   //actualiza los datos en select2
        })
    });
</script>
@endpush
