<?php $__env->startSection('title', __('Usuarios Pendientes')); ?>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
								Lista de Usuarios Pendientes </h4>
						</div>
						<?php if(session()->has('message')): ?>
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
							<?php echo e(session('message')); ?> </div>
						<?php endif; ?>
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
								placeholder="Buscar">
						</div>
						
					</div>
				</div>

				<div class="card-body">
					<?php echo $__env->make('livewire.usuarios-pendientes.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php echo $__env->make('livewire.usuarios-pendientes.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php if($usuariosPendientes->Count()): ?>
					<div class="table-responsive">
						<table class="table table-bordered table-sm">
							<thead class="thead">
								<tr>
									<td>#</td>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Direccion</th>
									<th>Telefono</th>
									<th>Tipo</th>
									<th>Email</th>
									<td>ACCCIONES</td>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $usuariosPendientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($loop->iteration); ?></td>
									<td><?php echo e($row->nombres); ?></td>
									<td><?php echo e($row->apellidos); ?></td>
									<td><?php echo e($row->direccion); ?></td>
									<td><?php echo e($row->telefono); ?></td>
									<td><?php echo e($row->tipo); ?></td>
									<td><?php echo e($row->email); ?></td>
									<td width="90">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-sm dropdown-toggle"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Actions
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												
												<?php if($row->tipo == 'estudiante'): ?>
												<a data-toggle="modal" data-target="#updateModal" class="dropdown-item"
													wire:click="aprobarEstudiante(<?php echo e($row->id); ?>)"><i class="fa fa-edit"></i> Agregar nivel </a>
												<?php else: ?>
												<a class="dropdown-item"
													onclick="confirm('¿Quiere registar este usuario? \nSe registrará este usuario <?php echo e($row->tipo); ?>!')||event.stopImmediatePropagation()"
													wire:click="aprobar(<?php echo e($row->id); ?>)"><i class="fa fa-star"></i>
													Aprobar </a>
												<?php endif; ?>

												<a class="dropdown-item"
													onclick="confirm('¿Quiere eliminar este usuario? \nLos Usuarios Pendientes borrados no se pueden recuperar!')||event.stopImmediatePropagation()"
													wire:click="destroy(<?php echo e($row->id); ?>)"><i class="fa fa-trash"></i>
													Borrar </a>
											</div>
										</div>
									</td>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<?php echo e($usuariosPendientes->links()); ?>

					</div>
					<?php else: ?>
					<div class="card-body">
						<strong>No existen Usuarios Pendientes</strong>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /opt/lampp/htdocs/educa-tesis/resources/views/livewire/usuarios-pendientes/view.blade.php ENDPATH**/ ?>