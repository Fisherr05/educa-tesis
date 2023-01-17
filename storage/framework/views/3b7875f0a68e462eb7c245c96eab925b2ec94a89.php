<?php $__env->startSection('title', __('Estudiantes')); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Estudiantes </h4>
                        </div>
                        <?php if(session()->has('message')): ?>
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                <?php echo e(session('message')); ?> </div>
                        <?php endif; ?>
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search"
                                id="search" placeholder="Buscar Estudiantes">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Estudiante
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <?php echo $__env->make('livewire.estudiantes.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('livewire.estudiantes.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($estudiantes->count()): ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Nivel</th>
                                    <th>Paralelo</th>
                                    <td>ACCIONES</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($row->user->nombres); ?></td>
                                        <td><?php echo e($row->user->apellidos); ?></td>
                                        <td><?php echo e($row->nivel->nombre); ?> </td>
                                        <td><?php echo e($row->nivel->paralelo); ?></td>
                                        <td >
                                            <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary"
                                                data-toggle="tooltip" data-placement="bottom" title="Editar"
                                                wire:click="edit(<?php echo e($row->id); ?>)"><i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                                title="Eliminar"
                                                onclick="confirm('¿Desea eliminar este Estudiante? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                wire:click="destroy(<?php echo e($row->id); ?>)"><i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($estudiantes->links()); ?>

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
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/estudiantes/view.blade.php ENDPATH**/ ?>