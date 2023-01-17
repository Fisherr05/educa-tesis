<?php $__env->startSection('title', __('Temarios')); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <h4><i class="fab fa-laravel text-info"></i>
                                Lista de Temarios </h4>
                        </div>
                        <?php if(session()->has('message')): ?>
                            <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
                                <?php echo e(session('message')); ?> </div>
                        <?php endif; ?>
                        <div>
                            <input wire:model='keyWord' type="text" class="form-control" name="search"
                                id="search" placeholder="Buscar Temarios">
                        </div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                            <i class="fa fa-plus"></i> Agregar Temarios
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <?php echo $__env->make('livewire.temarios.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('livewire.temarios.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($temarios->Count()): ?>
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <thead class="thead">
                                    <tr>
                                        <td scope="col">#</td>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Contenido</th>
                                        <th scope="col">Actividad</th>
                                        <th scope="col">Multimedia</th>
                                        <th scope="col">Estado</th>
                                        <td scope="col">ACTIONS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $temarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr></tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($row->nombre); ?></td>
                                        <td><?php echo e($row->contenido); ?></td>
                                        <td><?php echo e($row->actividad->nombre); ?></td>
                                        <td>
                                            <?php if(isset($row->multimedias)): ?>
                                                <?php if($row->multimedias->imagen == true): ?>
                                                    <img src="<?php echo e(Storage::url($row->multimedias->url)); ?>" alt=""
                                                        width="80" height="80">
                                                <?php else: ?>
                                                    <?php echo e($row->multimedias->url); ?>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($row->estado->nombre); ?></td>
                                        <td>

                                            <a data-toggle="modal" data-target="#updateModal"
                                                class="btn btn-secondary"data-toggle="tooltip" data-placement="bottom"
                                                title="Editar" wire:click="edit(<?php echo e($row->id); ?>)"><i
                                                    class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                                title="Eliminar"
                                                onclick="confirm('¿Desea eliminar este temario? \n¡Esta acción es irreversible!')||event.stopImmediatePropagation()"
                                                wire:click="destroy(<?php echo e($row->id); ?>)"><i
                                                    class="fa fa-trash"></i></a>

                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($temarios->links()); ?>

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
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/temarios/view.blade.php ENDPATH**/ ?>