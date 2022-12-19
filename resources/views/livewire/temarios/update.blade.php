<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
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
                <label for="nombre">Nombre:</label>
                <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="imagen"></label>
                <input wire:model="imagen" type="text" class="form-control" id="imagen" placeholder="Imagen">@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="alt_imagen"></label>
                <input wire:model="alt_imagen" type="text" class="form-control" id="alt_imagen" placeholder="Alt Imagen">@error('alt_imagen') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="video"></label>
                <input wire:model="video" type="text" class="form-control" id="video" placeholder="Video">@error('video') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="contenido"></label>
                <input wire:model="contenido" type="text" class="form-control" id="contenido" placeholder="Contenido">@error('contenido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="id_actividad"></label>
                <input wire:model="id_actividad" type="text" class="form-control" id="id_actividad" placeholder="Id Actividad">@error('id_actividad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="id_estado"></label>
                <input wire:model="id_estado" type="text" class="form-control" id="id_estado" placeholder="Id Estado">@error('id_estado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
