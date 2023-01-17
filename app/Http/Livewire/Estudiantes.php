<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudiante;
use App\Models\Nivel;
use App\Models\User;
use App\Models\UsuarioPendiente;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class Estudiantes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_usuario, $id_nivel, $nombres, $apellidos, $direccion, $telefono, $email, $password, $updatePassword, $password_confirmation;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.estudiantes.view', [
            'estudiantes' => Estudiante::with('user')->with('nivel')->latest()
                // ->orWhere('id_usuario', 'LIKE', $keyWord)
                // ->orWhere('id_nivel', 'LIKE', $keyWord)
                ->orWhereRelation('user', 'nombres', 'LIKE', $keyWord)
                ->orWhereRelation('user', 'apellidos', 'LIKE', $keyWord)
                ->orWhereRelation('nivel', 'nombre', 'LIKE', $keyWord)
                ->orWhereRelation('nivel', 'paralelo', 'LIKE', $keyWord)
                ->paginate(10),
            'niveles' => Nivel::all(),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->resetValidation();
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->id_usuario = null;
        $this->id_nivel = null;
        $this->nombres = null;
        $this->apellidos = null;
        $this->direccion = null;
        $this->telefono = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->updatePassword = false;
    }

    public function store()
    {
        $this->validate([
            // 'id_usuario' => 'required',
            'id_nivel' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $usuario = User::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Estudiante::create([
            'id_usuario' => $usuario->id,
            'id_nivel' => $this->id_nivel
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Estudiante Creado Con Éxito.');
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $record = User::find($estudiante->id_usuario);
        $this->selected_id = $id;
        $this->nombres = $record->nombres;
        $this->apellidos = $record->apellidos;
        $this->direccion = $record->direccion;
        $this->telefono = $record->telefono;
        $this->email = $record->email;
        $this->id_nivel = $estudiante->id_nivel;
        $this->password = null;
        $this->updateMode = true;
    }

    public function update()
    {
        $reglaValidar = [
            'id_nivel' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ];
        $updateUser = [
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ];
        if ($this->updatePassword) {
            $reglaValidar += ['password' => 'required|confirmed'];
            $updateUser += ['password' => Hash::make($this->password)];
        }
        $this->validate($reglaValidar);
        if ($this->selected_id) {
            $record = Estudiante::find($this->selected_id);
            $usuario = User::find($record->id_usuario);
            $usuario->update($updateUser);
            $record->update([
                'id_nivel' => $this->id_nivel
            ]);

            $this->resetInput();
            $this->emit('closeModal');
            $this->updateMode = false;
            session()->flash('message', 'Estudiante Actualizado Con Éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Estudiante::where('id', $id);
            $record->delete();
        }
    }

    public function updatePassword()
    {
        $this->updatePassword = !$this->updatePassword;
    }
}
