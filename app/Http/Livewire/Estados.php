<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estado;

class Estados extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $activo;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.estados.view', [
            'estados' => Estado::Where('nombre', 'LIKE', $keyWord)->get(),
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
        $this->activo = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        Estado::create([
            'nombre' => $this->nombre
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Estado Creado con Éxito.');
    }

    public function edit($id)
    {
        $record = Estado::findOrFail($id);

        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->activo = $record->activo;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Estado::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'activo' => $this->activo,
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'Estado Actualizado con Éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Estado::where('id', $id);
            $record->delete();
        }
    }
}
