<?php $__env->startSection('title', __('Cualidades')); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Cualidades </h4>
                        </div>

                        <?php if(session()->has('message')): ?>
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                            <?php echo e(session('message')); ?> </div>
                        <?php endif; ?>
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
                                placeholder="Buscar Cualidades">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Cualidades
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <?php echo $__env->make('livewire.cualidades.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('livewire.cualidades.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($cualidades->Count()): ?>
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead class="thead">
                                <tr>
                                    <td scope="col">#</td>
                                    <th scope="col">Nombre</th>
                                    <td scope="col">Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cualidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($row->nombre); ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#updateModal" class="btn btn-secondary"
                                            data-toggle="tooltip" data-placement="bottom" title="Editar"
                                            wire:click="edit(<?php echo e($row->id); ?>)"><i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                            title="Eliminar"
                                            onclick="confirm('¿Desea eliminar esta cualidad? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                            wire:click="destroy(<?php echo e($row->id); ?>)"><i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($cualidades->links()); ?>

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
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/cualidades/view.blade.php ENDPATH**/ ?>