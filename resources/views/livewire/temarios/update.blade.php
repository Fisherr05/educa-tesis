<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Temario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="nombre"></label>
                        <input wire:model="nombre" type="text" class="form-control" id="nombre"
                            placeholder="Nombre">
                        @error('nombre')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contenido"></label>
                        <input wire:model="contenido" type="text" class="form-control" id="contenido"
                            placeholder="Contenido">
                        @error('contenido')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_actividad"></label>
                        <select wire:model="id_actividad" id="id_actividad" class="form-control"
                            placeholder="Actividad">
                            <option hidden value="">Seleccione una actividad</option>
                            @foreach ($actividades as $id => $nombre)
                                <option value="{{ $id }}">{{ $nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_actividad')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_estado"></label>
                        <select wire:model="id_estado" id="id_estado" class="form-control" placeholder="Estado">
                            <option hidden value="">Seleccione un estado</option>
                            @foreach ($estados as $id => $nombre)
                                <option value="{{ $id }}">{{ $nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_estado')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <select wire:model="seleccion" wire:change="seleccionChange()" id="seleccionar"
                            class="form-control" placeholder="Seleccione multimedia">
                            <option hidden value="">Seleccione multimedia</option>
                            <option value="1">Imagen</option>
                            <option value="2">Video</option>
                        </select>
                    </div>
                    @if ($imagen == true)
                        <div class="form-group">
                            <label for="multimedia"></label>
                            @isset($multimedia->url)
                                <img src="{{ Storage::url($multimedia->url) }}" class="img-thumbnail" alt=""
                                    width="100" height="100">
                            @endisset
                            <input wire:model="multimedia" type="file" class="form-control" id="multimedia"
                                placeholder="Multimedia" accept="image/*">
                            @error('multimedia')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                    @if ($video == true)
                        <div id="video" class="form-group">
                            <label for="multimedia"></label>
                            <textarea wire:model="multimedia" id="multimedia" class="md-textarea form-control" rows="3"
                                placeholder="Ingrese iframe de video"></textarea>
                            @error('multimedia')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
