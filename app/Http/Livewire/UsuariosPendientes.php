<?php

namespace App\Http\Livewire;

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Nivel;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\UsuarioPendiente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Laravel\Fortify\Rules\Password;

class UsuariosPendientes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selected_id, $keyWord, $nombres, $apellidos, $direccion, $telefono, $tipo, $nivel, $email, $password, $password_confirmation;
    public $updateMode = false;

    public function updatingKeyWord()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        $usuarioPendiente = UsuarioPendiente::latest()
            ->orWhere('nombres', 'LIKE', $keyWord)
            ->orWhere('apellidos', 'LIKE', $keyWord)
            ->orWhere('direccion', 'LIKE', $keyWord)
            ->orWhere('telefono', 'LIKE', $keyWord)
            ->orWhere('tipo', 'LIKE', $keyWord)
            ->orWhere('email', 'LIKE', $keyWord)
            ->paginate(10);

        return view('livewire.usuarios-pendientes.view', [
            'usuariosPendientes' => $usuarioPendiente,
            'niveles' => Nivel::all(),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->nombres = null;
        $this->apellidos = null;
        $this->direccion = null;
        $this->telefono = null;
        $this->tipo = null;
        $this->nivel = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
    }

    public function store()
    {
        $this->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'tipo' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', new Password, 'confirmed']
        ]);

        UsuarioPendiente::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'tipo' => $this->tipo,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'UsuariosPendiente Successfully created.');
    }

    public function edit($id)
    {
        $record = UsuarioPendiente::findOrFail($id);

        $this->selected_id = $id;
        $this->nombres = $record->nombres;
        $this->apellidos = $record->apellidos;
        $this->direccion = $record->direccion;
        $this->telefono = $record->telefono;
        $this->tipo = $record->tipo;
        $this->nivel = $record->nivel;
        $this->email = $record->email;
        $this->password = $record->password;
        $this->updateMode = true;
    }

    public function update()
    {

        $this->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'tipo' => 'required',
            'nivel' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', new Password, 'confirmed']
        ]);


        if ($this->selected_id) {
            $record = UsuarioPendiente::find($this->selected_id);
            $record->update([
                'nombres' => $this->nombres,
                'apellidos' => $this->apellidos,
                'direccion' => $this->direccion,
                'telefono' => $this->telefono,
                'tipo' => $this->tipo,
                'nivel' => $this->nivel,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'UsuariosPendiente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = UsuarioPendiente::where('id', $id);
            $record->delete();
            return redirect(request()->header('Referer'));
        }
    }

    public function aprobar($id)
    {
        if ($id) {
            //captura los datos que se van a registrar en la otra tabla
            $record = UsuarioPendiente::find($id)->get(['nombres', 'apellidos', 'direccion', 'telefono', 'email', 'password'])->toArray()[0];
            $usuarioPendiente = UsuarioPendiente::find($id); //selecciona el dato completo
            $usuario = User::create($record); //guarda los datos captados
            if ($usuarioPendiente->tipo == 'docente') {
                Docente::create([
                    'id_usuario' => $usuario->id,
                ]);
            }
            $usuarioPendiente->delete(); //elimina el dato seleccionado
            $this->resetInput();
            $this->emit('closeModal');
            return redirect(request()->header('Referer'));
        }
    }
    public function aprobarEstudiante($id)
    {
        $usuarioPendiente = UsuarioPendiente::findOrFail($id);
        $this->selected_id = $id;
        $this->nivel = $usuarioPendiente->nivel;
    }

    public function guardarEstudiante()
    {
        $this->validate([
            'nivel' => 'required',
        ]);

        if ($this->selected_id) {
            $usuarioPendiente = UsuarioPendiente::findOrFail($this->selected_id)->get(['nombres', 'apellidos', 'direccion', 'telefono', 'email', 'password'])->toArray()[0];
            $usuario = User::create($usuarioPendiente);
            Estudiante::create([
                'id_usuario' => $usuario->id,
                'id_nivel' => $this->nivel
            ]);
            $record = UsuarioPendiente::find($this->selected_id);
            $record->delete();
            $this->resetInput();
            $this->emit('closeModal');
            return redirect(request()->header('Referer'));
        }
    }
}
