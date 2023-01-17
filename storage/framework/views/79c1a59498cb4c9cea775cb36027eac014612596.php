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
                                    
                                    <label for="id_nivel"></label>
                                    <select wire:model="id_nivel" wire:change="changeNivel()" id="id_nivel"
                                        class="form-control" placeholder="Nivel">
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
                                </div>
                        </div>
                        <?php if(session()->has('message')): ?>
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                <?php echo e(session('message')); ?> </div>
                        <?php endif; ?>

                        
                    </div>
                </div>

                <div class="card-body">

                    

                    <div class="table-responsive">
                        <?php if($this->listado): ?>
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <td>#</td>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        
                                        <td>ACCIONES</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $this->listado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($row->user->nombres); ?></td>
                                            <td><?php echo e($row->user->apellidos); ?></td>
                                            
                                            <td>
                                                
                                            </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <div class="card-body">
                                <strong>Seleccione un nivel, por favor</strong>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/listado-estudiantes.blade.php ENDPATH**/ ?>