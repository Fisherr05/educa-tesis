<?php $__env->startSection('title', __('Docentes')); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Docentes </h4>
                        </div>
                        <?php if(session()->has('message')): ?>
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                            <?php echo e(session('message')); ?> </div>
                        <?php endif; ?>
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
                                placeholder="Buscar Docentes">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Docente
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <?php echo $__env->make('livewire.docentes.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('livewire.docentes.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($docentes->count()): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Niveles</th>
                                    <th>Paralelos</th>
                                    <td>ACCIONES</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($docente->user->nombres); ?></td>
                                    <td><?php echo e($docente->user->apellidos); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $docente->niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($nivel->nombre); ?><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <?php $__currentLoopData = $docente->niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($nivel->paralelo); ?><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <a id="editar" data-toggle="modal" data-target="#updateModal"
                                            class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                                            title="Editar" wire:click="edit(<?php echo e($docente->id); ?>)"><i
                                                class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                            title="Eliminar"
                                            onclick="confirm('¿Desea eliminar este Docente? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                            wire:click="destroy(<?php echo e($docente->id); ?>)"><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($docentes->links()); ?>

                    </div>
                    <?php else: ?>
                        <div class="card-body">
                            <strong>No existen datos</strong>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/docentes/view.blade.php ENDPATH**/ ?>