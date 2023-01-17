<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Temario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">

                
                <form>
                    <div class="form-group">
                        <label for="nombre"></label>
                        <input wire:model="nombre" type="text" class="form-control" id="nombre"
                            placeholder="Nombre">
                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="contenido"></label>
                        <input wire:model="contenido" type="text" class="form-control" id="contenido"
                            placeholder="Contenido">
                        <?php $__errorArgs = ['contenido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_actividad"></label>
                        <select wire:model="id_actividad" id="id_actividad" class="form-control"
                            placeholder="Actividad">
                            <option hidden value="">Seleccione una actividad</option>
                            <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_actividad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_estado"></label>
                        <select wire:model="id_estado" id="id_estado" class="form-control" placeholder="Estado">
                            <option hidden value="">Seleccione un estado</option>
                            <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>"><?php echo e($nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <select wire:model="seleccion" wire:change="seleccionChange()" id="seleccionar" class="form-control"
                            placeholder="Seleccione multimedia">
                            <option hidden value="">Seleccione multimedia</option>
                            <option value="1">Imagen</option>
                            <option value="2">Video</option>
                        </select>
                    </div>
                    <?php if($imagen == true): ?>
                        <div id="imagen" class="form-group">
                            <label for="multimedia"></label>
                            <?php if($multimedia && !$updateMode): ?>
                                <img src="<?php echo e($multimedia->temporaryUrl()); ?>" id="multimedia_view" class="img-thumbnail"
                                    alt="" width="100" height="100">
                            <?php else: ?>
                                <img src="<?php echo e(asset('img/void.jpeg')); ?>" id="multimedia_view" class="img-thumbnail"
                                    alt="" width="100" height="100">
                            <?php endif; ?>
                            <input wire:model="multimedia" type="file" class="form-control" id="multimedia"
                                placeholder="Multimedia" accept="image/*">
                            <?php $__errorArgs = ['multimedia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <?php else: ?>
                        Hola imagen
                    <?php endif; ?>
                    <?php if($video == true): ?>
                        <div id="video" class="form-group">
                            <label for="multimedia"></label>
                            <textarea wire:model="multimedia" id="multimedia" class="md-textarea form-control" rows="3"
                                placeholder="Ingrese iframe de video"></textarea>
                            <?php $__errorArgs = ['multimedia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <?php else: ?>
                        Hola Video
                    <?php endif; ?>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click="cancel()" id="cerrar" type="button" class="btn btn-secondary close-btn"
                    data-dismiss="modal">Close</button>
                
                <button type="button" wire:click.prevent="store()"
                    class="btn btn-primary close-modal">Save</button>
            </div>
            
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

    const cerrar = document.getElementById("cerrar");
    cerrar.onclick = () => {
        document.getElementById("multimedia").value = "";
    }
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
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/temarios/create.blade.php ENDPATH**/ ?>