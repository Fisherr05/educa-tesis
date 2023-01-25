<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Nivel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Actividades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::whereRelation('estado','activo','=','1')->get();
        return view('estudiantes.index', compact('actividades'));
    }

    public 	function niveles()
    {
        $niveles = Nivel::all();
        return view('estudiantes.reporte', compact('niveles'));
    }
    public function reporte(Nivel $nivel)
    {
        // $keyWord = '%' . $this->keyWord . '%';
        // $estudiantes=Estudiante::with('user')->with('nivel')->latest()
        //         // ->orWhere('id_usuario', 'LIKE', $keyWord)
        //         // ->orWhere('id_nivel', 'LIKE', $keyWord)
        //         ->orWhereRelation('user', 'nombres', 'LIKE', $keyWord)
        //         ->orWhereRelation('user', 'apellidos', 'LIKE', $keyWord)
        //         ->orWhereRelation('nivel', 'nombre', 'LIKE', $keyWord)
        //         ->orWhereRelation('nivel', 'paralelo', 'LIKE', $keyWord)
        //         ->paginate(10);

        $estudiantes = DB::table('users')->join('estudiantes', 'users.id', '=', 'estudiantes.id_usuario')->join('niveles', 'niveles.id', 'estudiantes.id_nivel')->select('users.nombres as nombres', 'users.apellidos as apellidos', 'niveles.nombre as nivel', 'niveles.paralelo as paralelo')->where('niveles.id','like','%'.$nivel->id.'%')->get();
        return view('livewire.estudiantes.reporte', compact('estudiantes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
