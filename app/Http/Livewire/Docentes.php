<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Nivel;
use App\Models\User;
use App\Models\UsuarioPendiente;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class Docentes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $niveles_selected, $id_usuario, $nombres, $apellidos, $direccion, $telefono, $email, $password, $updatePassword, $password_confirmation;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.docentes.view', [
            'docentes' => Docente::with('user')->with('niveles')->latest()
                // ->orWhere('id_usuario', 'LIKE', $keyWord)
                ->orWhereRelation('user', 'nombres', 'LIKE', $keyWord)
                ->orWhereRelation('user', 'apellidos', 'LIKE', $keyWord)
                ->orWhereRelation('niveles', 'nombre', 'LIKE', $keyWord)
                ->orWhereRelation('niveles', 'paralelo', 'LIKE', $keyWord)
                ->paginate(10),
            'niveles' => Nivel::all()
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
        $this->nombres = null;
        $this->apellidos = null;
        $this->direccion = null;
        $this->telefono = null;
        $this->email = null;
        $this->password = null;
        $this->niveles_selected = [];
        $this->password_confirmation = null;
        $this->updatePassword = false;
    }

    public function store()
    {
        $this->validate([
            // 'id_usuario' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', new Password, 'confirmed']
        ]);
        $usuario = User::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $docente = Docente::create([
            'id_usuario' => $usuario->id,
        ]);
        $docente->niveles()->attach($this->niveles_selected);
        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Docente Creado Con Éxito.');
    }

    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        $record = User::find($docente->id_usuario);
        $this->selected_id = $id;
        $this->nombres = $record->nombres;
        $this->apellidos = $record->apellidos;
        $this->direccion = $record->direccion;
        $this->telefono = $record->telefono;
        $this->email = $record->email;
        $this->password = null;
        $this->updateMode = true;
        $niveles_id=[];
        foreach ($docente->niveles->toArray() as $nivel) {
            $niveles_id[]=$nivel["id"];
        }
        $this->niveles_selected=$niveles_id;
        $this->emit('cargarNiveles');
    }
    public function niveles($id)
    {
        $docente = Docente::find($id);
        return view('livewire.docentes.update', compact('docente'));
    }

    public function update()
    {
        $reglaValidar = [
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
            $record = Docente::find($this->selected_id);
            $record->niveles()->sync($this->niveles_selected);
            $usuario = User::find($record->id_usuario);
            $usuario->update($updateUser);

            $this->resetInput();
            $this->emit('closeModal');
            $this->updateMode = false;
            session()->flash('message', 'Docente Actualizado Con Éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Docente::where('id', $id);
            $record->delete();
        }
    }
    public function updatePassword()
    {
        $this->updatePassword = !$this->updatePassword;
    }
}
