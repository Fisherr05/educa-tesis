<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use App\Models\Nivel;
use Livewire\Component;

class ListadoEstudiantes extends Component
{
    public  $id_nivel, $listado;
    public function render()
    {
        return view('livewire.listado-estudiantes', [
            'niveles' => Nivel::all(),
        ]);
    }
    private function resetInput()
    {
        $this->id_nivel = null;
        $this->listado = null;
    }

    public function changeNivel()
    {
        $this->listado = Estudiante::where('id_nivel', $this->id_nivel)->with('user')->get();
    }
}
