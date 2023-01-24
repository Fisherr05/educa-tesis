<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- {!! Form::open() !!} --}}
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Temario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">

                {{-- <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    @error('nombre')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('contenido', 'Contenido') !!}
                    {!! Form::text('contenido', null, ['class' => 'form-control']) !!}
                    @error('contenido')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('id_actividad', 'Actividad') !!}
                    {!! Form::select('id_actividad', $actividades,null, ['class' => 'form-control']) !!}
                    @error('id_actividad')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('id_estado', 'Estado') !!}
                    {!! Form::select('id_estado', $estados,null, ['class' => 'form-control']) !!}
                    @error('id_estado')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <form>
                    <div class="form-group">
                        <label for="nombre"></label>
                        <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
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
                    <div id="imagen" class="form-group">
                        <label for="multimedia"></label>
                        @if ($url_imagen && !$updateMode)
                        <img src="{{ $url_imagen->temporaryUrl() }}" id="multimedia_view" class="img-thumbnail" alt=""
                            width="100" height="100">
                        @else
                        <img src="{{ asset('img/void.jpeg') }}" id="multimedia_view" class="img-thumbnail" alt=""
                            width="100" height="100">
                        @endif
                        <input wire:model="url_imagen" type="file" class="form-control" id="url_imagen"
                            placeholder="Seleccione una imagen" accept="image/*">
                        @error('url_imagen')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div id="video" class="form-group">
                        <label for="url_video"></label>
                        <textarea wire:model="url_video" id="url_video" class="md-textarea form-control" rows="3"
                            placeholder="Ingrese iframe de video"></textarea>
                        @error('url_video')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="cancel()" id="cerrar" type="button" class="btn btn-secondary close-btn"
                    data-dismiss="modal">Cerrar</button>
                {{-- {!! Form::submit('Guardar', ['class'=>'btn btn-primary close-modal']) !!} --}}
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
            {{-- {!! Form::close() !!} --}}
        </div>
    </div>
</div>
<script>
    //Al hacer clichace una preview de imagen cargada.
    // const cambiarImagen = (event, img) => {
    //     const preview = document.getElementById(img);
    //     //Recuperamos el input que desencadeno la acción
    //     const file = event.target.files[0];

    //     const reader = new FileReader()
    //     reader.onload = (event) => {
    //         preview.setAttribute('src', event.target.result);
    //     }
    //     if (file) {
    //         reader.readAsDataURL(file);
    //     }
    // }

    // const cerrar = document.getElementById("cerrar");
    // cerrar.onclick = () => {
    //     document.getElementById("multimedia").value = "";
    // }
    // const seleccionar = document.getElementById("seleccionar");
    // seleccionar.onchange = () => {
    //     if (seleccionar.value == 1) {
    //         document.getElementById("video").style.display = "none";
    //         document.getElementById("imagen").style.display = "";
    //     }
    //     if (seleccionar.value == 2) {
    //         document.getElementById("video").style.display = "";
    //         document.getElementById("imagen").style.display = "none";
    //     }
    // }
</script>
