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
    public $selected_id, $keyWord, $nombre, $seleccion, $contenido, $id_actividad, $id_estado, $url_imagen, $url_video, $updateImage=false;
    public $updateMode = false;

    protected $rules = [
        'nombre' => 'required',
        'id_actividad' => 'required',
        'id_estado' => 'required',
        // 'url_imagen' => "sometimes|nullable|image",
        'url_video' => "required",
    ];


    protected $messages = [
        'nombre.required' => 'Este campo es obligatorio.',
        'id_actividad.required' => 'Este campo es obligatorio.',
        'id_estado.required' => 'Este campo es obligatorio.',
        'url_imagen.image' => 'Debe ser una imagen.',
        'url_video.required' => 'Este campo es obligatorio.'
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
        $this->seleccion = null;
        $this->url_video = null;
        $this->url_imagen = null;
        $this->updateImage=false;
    }
    public function store()
    {
        $this->validate();
        $url_imagen = Storage::put('temarios', $this->url_imagen);
        Temario::create([
            'nombre' => $this->nombre,
            'contenido' => $this->contenido,
            'id_actividad' => $this->id_actividad,
            'id_estado' => $this->id_estado,
            'url_video' => $this->url_video,
            'url_imagen' => $url_imagen
        ]);
        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Temario Creado Con Éxito.');
    }

    public function edit($id)
    {
        $record = Temario::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->contenido = $record->contenido;
        $this->id_actividad = $record->id_actividad;
        $this->id_estado = $record->id_estado;
        $this->url_imagen = $record->url_imagen;
        $this->url_video = $record->url_video;
        // if (isset($record->multimedias)) {
        //     $this->multimedia = $record->multimedias->url;
        //     if ($record->multimedias->imagen == true) {
        //         $this->imagen = true;
        //         $this->seleccion = 1;
        //     } else {
        //         $this->video = true;
        //         $this->seleccion = 2;
        //     }
        // }
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate();


        if ($this->selected_id) {
            $record = Temario::find($this->selected_id);

            $parametrosUpdate = [
                'nombre' => $this->nombre,
                'contenido' => $this->contenido,
                'id_actividad' => $this->id_actividad,
                'id_estado' => $this->id_estado,
                'url_video' => $this->url_video,
            ];

            if ($this->url_imagen) {
                $url_imagen = Storage::put('temarios', $this->url_imagen);
                $parametrosUpdate[]=['url_imagen' => $url_imagen];
                if ($record->url_imagen) {                      //pregunta si hay un registro en base de datos
                    Storage::delete($record->url_imagen);
                }
            }
            $record->update($parametrosUpdate);

            $this->resetInput();
            $this->updateMode = false;
            $this->emit('closeModal');
            session()->flash('message', 'Temario Actualizado Con Éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Temario::where('id', $id);
            $record->delete();
        }
    }

    public function updateImage()
    {
        $this->updateImage = !$this->updateImage;
    }
}
