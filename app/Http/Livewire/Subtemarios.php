<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Subtemario;

class Subtemarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $ruta_recurso, $id_estado;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.subtemarios.view', [
            'subtemarios' => Subtemario::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('ruta_recurso', 'LIKE', $keyWord)
						->orWhere('id_estado', 'LIKE', $keyWord)
						->paginate(10),
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
		$this->ruta_recurso = null;
		$this->id_estado = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'ruta_recurso' => 'required',
		'id_estado' => 'required',
        ]);

        Subtemario::create([ 
			'nombre' => $this-> nombre,
			'ruta_recurso' => $this-> ruta_recurso,
			'id_estado' => $this-> id_estado
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Subtemario Successfully created.');
    }

    public function edit($id)
    {
        $record = Subtemario::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->ruta_recurso = $record-> ruta_recurso;
		$this->id_estado = $record-> id_estado;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'ruta_recurso' => 'required',
		'id_estado' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Subtemario::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'ruta_recurso' => $this-> ruta_recurso,
			'id_estado' => $this-> id_estado
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Subtemario Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Subtemario::where('id', $id);
            $record->delete();
        }
    }
}
