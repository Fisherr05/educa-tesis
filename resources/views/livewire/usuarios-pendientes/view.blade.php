@section('title', __('Usuarios Pendientes'))
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
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;">
							{{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search"
								placeholder="Buscar">
						</div>
						{{-- <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i> Agregar Usuario Pendiente
						</div> --}}
					</div>
				</div>

				<div class="card-body">
					@include('livewire.usuarios-pendientes.create')
					@include('livewire.usuarios-pendientes.update')
					@if ($usuariosPendientes->Count())
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
								@foreach ($usuariosPendientes as $row)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $row->nombres }}</td>
									<td>{{ $row->apellidos }}</td>
									<td>{{ $row->direccion }}</td>
									<td>{{ $row->telefono }}</td>
									<td>{{ $row->tipo }}</td>
									<td>{{ $row->email }}</td>
									<td width="90">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-sm dropdown-toggle"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Actions
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												{{-- <a data-toggle="modal" data-target="#updateModal"
													class="dropdown-item" wire:click="edit({{$row->id}})"><i
														class="fa fa-edit"></i> Edit </a> --}}
												@if ($row->tipo == 'estudiante')
												<a data-toggle="modal" data-target="#updateModal" class="dropdown-item"
													wire:click="aprobarEstudiante({{$row->id}})"><i class="fa fa-edit"></i> Agregar nivel </a>
												@else
												<a class="dropdown-item"
													onclick="confirm('¿Quiere registar este usuario? \nSe registrará este usuario {{$row->tipo}}!')||event.stopImmediatePropagation()"
													wire:click="aprobar({{ $row->id }})"><i class="fa fa-star"></i>
													Aprobar </a>
												@endif

												<a class="dropdown-item"
													onclick="confirm('¿Quiere eliminar este usuario? \nLos Usuarios Pendientes borrados no se pueden recuperar!')||event.stopImmediatePropagation()"
													wire:click="destroy({{ $row->id }})"><i class="fa fa-trash"></i>
													Borrar </a>
											</div>
										</div>
									</td>
									@endforeach
							</tbody>
						</table>
						{{ $usuariosPendientes->links() }}
					</div>
					@else
					<div class="card-body">
						<strong>No existen Usuarios Pendientes</strong>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
