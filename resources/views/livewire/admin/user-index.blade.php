<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese un correo o nombre de usuario">
        </div>
        @if ($users->Count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES Y APELLIDOS</th>
                        <th>EMAIL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nombres}} {{$user->apellidos}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.users.edit',$user->id)}}">Asignar Rol</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No existen datos</strong>
        </div>
        @endif

    </div>

</div>
