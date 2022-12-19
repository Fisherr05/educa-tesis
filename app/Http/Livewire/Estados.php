<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estado;

class Estados extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.estados.view', [
            'estados' => Estado::Where('nombre', 'LIKE', $keyWord)->get(),
        ]);
        return dd(Estado::latest());
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->nombre = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
        ]);

        Estado::create([
			'nombre' => $this-> nombre
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Estado Successfully created.');
    }

    public function edit($id)
    {
        $record = Estado::findOrFail($id);

        $this->selected_id = $id;
		$this->nombre = $record-> nombre;

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
			'nombre' => $this-> nombre
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Estado Successfully updated.');
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
