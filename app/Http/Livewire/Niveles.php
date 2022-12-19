<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Nivel;

class Niveles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $paralelo;
    public $updateMode = false;

    public function updatingKeyWord()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.niveles.view', [
            'niveles' => Nivel::latest()
                ->orWhere('nombre', 'LIKE', $keyWord)
                ->orWhere('paralelo', 'LIKE', $keyWord)
                ->paginate(2),
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
        $this->paralelo = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'paralelo' => 'required',
        ]);

        Nivel::create([
            'nombre' => $this->nombre,
            'paralelo' => $this->paralelo
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Nivel creado con éxito.');
    }

    public function edit($id)
    {
        $record = Nivel::findOrFail($id);

        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->paralelo = $record->paralelo;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'paralelo' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Nivel::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'paralelo' => $this->paralelo
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'Nivel actualizado con éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Nivel::where('id', $id);
            $record->delete();
            session()->flash('message', 'Registro eliminado.');
        }
    }
}
