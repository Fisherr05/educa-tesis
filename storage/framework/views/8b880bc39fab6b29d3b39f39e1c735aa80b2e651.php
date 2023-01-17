<?php $__env->startSection('title', __('Estudiantes')); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <h4><i class="fab fa-laravel text-info"></i>
                                    Reporte de Estudiantes </h4>
                            </div>
                            <?php if(session()->has('message')): ?>
                                <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                    <?php echo e(session('message')); ?> </div>
                            <?php endif; ?>
                            <div>
                                
                                <label for="id_nivel"></label>
                                <select wire:model="id_nivel" id="id_nivel" class="form-control" placeholder="Nivel">
                                    <option hidden value="">Seleccione un nivel</option>
                                    <?php $__currentLoopData = $niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($nivel->id); ?>"><?php echo e($nivel->nombre); ?> - <?php echo e($nivel->paralelo); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_nivel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <button class="btn btn-success" type="submit">Buscar</button>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card-body">

                        

                        <div class="table-responsive">
                            <?php echo $__env->make('livewire.estudiantes.listado', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<script>
    $("#id_nivel").onchange(function() {
        $.ajax({
            url: "listado/" + id,
            type: 'GET',
            // success: function(result) {
            //     $("#address").val(result.address);
            //     $("#email").html(result.email);
            // }
        })

    });
</script>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/estudiantes/reporte.blade.php ENDPATH**/ ?>