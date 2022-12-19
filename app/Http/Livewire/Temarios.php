<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Temario;

class Temarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $imagen, $alt_imagen, $video, $contenido, $id_actividad, $id_estado;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.temarios.view', [
            'temarios' => Temario::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('imagen', 'LIKE', $keyWord)
						->orWhere('alt_imagen', 'LIKE', $keyWord)
						->orWhere('video', 'LIKE', $keyWord)
						->orWhere('contenido', 'LIKE', $keyWord)
						->orWhere('id_actividad', 'LIKE', $keyWord)
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
		$this->imagen = null;
		$this->alt_imagen = null;
		$this->video = null;
		$this->contenido = null;
		$this->id_actividad = null;
		$this->id_estado = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'imagen' => 'required',
		'alt_imagen' => 'required',
		'video' => 'required',
		'id_actividad' => 'required',
		'id_estado' => 'required',
        ]);

        Temario::create([ 
			'nombre' => $this-> nombre,
			'imagen' => $this-> imagen,
			'alt_imagen' => $this-> alt_imagen,
			'video' => $this-> video,
			'contenido' => $this-> contenido,
			'id_actividad' => $this-> id_actividad,
			'id_estado' => $this-> id_estado
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Temario Successfully created.');
    }

    public function edit($id)
    {
        $record = Temario::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->imagen = $record-> imagen;
		$this->alt_imagen = $record-> alt_imagen;
		$this->video = $record-> video;
		$this->contenido = $record-> contenido;
		$this->id_actividad = $record-> id_actividad;
		$this->id_estado = $record-> id_estado;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'imagen' => 'required',
		'alt_imagen' => 'required',
		'video' => 'required',
		'id_actividad' => 'required',
		'id_estado' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Temario::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'imagen' => $this-> imagen,
			'alt_imagen' => $this-> alt_imagen,
			'video' => $this-> video,
			'contenido' => $this-> contenido,
			'id_actividad' => $this-> id_actividad,
			'id_estado' => $this-> id_estado
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Temario Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Temario::where('id', $id);
            $record->delete();
        }
    }
}
