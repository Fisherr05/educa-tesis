<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Actividad;
use App\Models\Estado;
use App\Models\Nivel;

class Actividades extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $id_nivel, $id_estado;
    public $updateMode = false;

    public function updatingKeyWord()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.actividades.view', [
            'actividades' => Actividad::with('estado')->with('nivel')
                ->orWhere('nombre', 'LIKE', $keyWord)
                ->orWhereRelation('nivel', 'nombre', 'LIKE', $keyWord)
                ->orWhereRelation('estado', 'nombre', 'LIKE', $keyWord)
                ->paginate(10),
            'niveles' => Nivel::all(),
            'estados' => Estado::all()
        ]);
    }

   
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->id_nivel = null;
        $this->id_estado = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'id_nivel' => 'required',
            'id_estado' => 'required',
        ]);

        Actividad::create([
            'nombre' => $this->nombre,
            'id_nivel' => $this->id_nivel,
            'id_estado' => $this->id_estado
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Actividad creada con éxito.');
    }

    public function edit($id)
    {
        $record = Actividad::findOrFail($id);

        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->id_nivel = $record->id_nivel;
        $this->id_estado = $record->id_estado;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'id_nivel' => 'required',
            'id_estado' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Actividad::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'id_nivel' => $this->id_nivel,
                'id_estado' => $this->id_estado
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'Actividad actualizada con éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Actividad::where('id', $id);
            $record->delete();
            session()->flash('message', 'Registro eliminado.');
        }
    }
}
