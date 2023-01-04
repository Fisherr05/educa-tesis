<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use App\Models\Estado;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Temario;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Temarios extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $seleccion, $multimedia, $contenido, $id_actividad, $id_estado, $imagen = false, $video = false;
    public $updateMode = false;

    protected $rules = [
        'nombre' => 'required',
        'id_actividad' => 'required',
        'id_estado' => 'required',
    ];


    protected $messages = [
        'nombre.required' => 'Este campo es obligatorio.',
        'id_actividad.required' => 'Este campo es obligatorio.',
        'id_estado.required' => 'Este campo es obligatorio.',
        'multimedia.image' => 'Debe ser una imagen.',
        'multimedia.required' => 'Este campo es obligatorio.'
    ];

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('livewire.temarios.view', [
            'temarios' => Temario::with('estado')->with('actividad')->latest()
                ->orWhere('nombre', 'LIKE', $keyWord)
                ->orWhere('contenido', 'LIKE', $keyWord)
                ->orWhereRelation('actividad', 'nombre', 'LIKE', $keyWord)
                ->orWhereRelation('estado', 'nombre', 'LIKE', $keyWord)
                ->paginate(10),
            'actividades' => Actividad::pluck('nombre', 'id'),
            'estados' => Estado::pluck('nombre', 'id'),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
        $this->resetValidation();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->contenido = null;
        $this->id_actividad = null;
        $this->id_estado = null;
        $this->multimedia = null;
        $this->seleccion = null;
        $this->video = false;
        $this->imagen = false;
    }

    public function seleccionChange()
    {
        if (isset($this->seleccion)) {
            if ($this->seleccion == 1) {
                $this->imagen = true;
                $this->video = false;
                $this->rules["multimedia"] = "image";
            }
            if ($this->seleccion == 2) {
                $this->multimedia=null;
                $this->video = true;
                $this->imagen = false;
                $this->rules["multimedia"] = "required";
            }
        }
    }
    public function store()
    {
        if (isset($this->seleccion)) {
            if ($this->seleccion == 1) {
                $this->rules["multimedia"] = "image";
            }
            if ($this->seleccion == 2) {
                $this->rules["multimedia"] = "required";
            }
        }
        $this->validate();

        $temario = Temario::create([
            'nombre' => $this->nombre,
            'contenido' => $this->contenido,
            'id_actividad' => $this->id_actividad,
            'id_estado' => $this->id_estado
        ]);

        if ($this->multimedia) {
            if ($this->imagen == true) {
                $url = Storage::put('temarios', $this->multimedia);
                $temario->multimedias()->create(['url' => $url, 'imagen' => $this->imagen]);
            }
            if ($this->video == true) {
                $temario->multimedias()->create(['url' => $this->multimedia]);
            }
        }
        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Temario Successfully created.');
    }

    public function edit($id)
    {
        $record = Temario::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->contenido = $record->contenido;
        $this->id_actividad = $record->id_actividad;
        $this->id_estado = $record->id_estado;
        if (isset($record->multimedias)) {
            $this->multimedia = $record->multimedias->url;
            if ($record->multimedias->imagen == true) {
                $this->imagen = true;
                $this->seleccion = 1;
            } else {
                $this->video = true;
                $this->seleccion = 2;
            }
        }
        $this->updateMode = true;
    }

    public function update()
    {
        if (isset($this->seleccion)) {
            if ($this->seleccion == 1) {
                $this->rules["multimedia"] = "image";
            }
            if ($this->seleccion == 2) {
                $this->rules["multimedia"] = "required";
            }
        }

        $this->validate();


        if ($this->selected_id) {
            $record = Temario::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'contenido' => $this->contenido,
                'id_actividad' => $this->id_actividad,
                'id_estado' => $this->id_estado
            ]);
            if ($this->multimedia) {
                if ($record->multimedias) { //pregunta si hay un registro en base de datos
                    if ($record->multimedias->imagen == true) { //pregunta si el registro de la base de datos es una imagen
                        $url = Storage::put('temarios', $this->multimedia);
                        Storage::delete($record->multimedias->url);
                        $record->multimedias->update(['url' => $url]);
                        if ($this->video == true) {
                            Storage::delete($this->multimedia);
                            $record->multimedias->update(['url' => $this->multimedia, 'imagen' => false]);
                        }

                    } else {
                        $record->multimedias->update(['url' => $this->multimedia]);
                        if ($this->imagen == true) {
                            $url = Storage::put('temarios', $this->multimedia);
                            $record->multimedias->update(['url' => $url, 'imagen' => $this->imagen]);
                        }
                    }
                } else {
                    //crea multimedia segun seleccion
                    if ($this->imagen == true) {
                        $url = Storage::put('temarios', $this->multimedia);
                        $record->multimedias()->create(['url' => $url, 'imagen' => $this->imagen]);
                    }
                    if ($this->video == true) {
                        $record->multimedias()->create(['url' => $this->multimedia]);
                    }
                }
            }

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
