<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Temario;
use Illuminate\Http\Request;

class Temarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function porActividad(Actividad $actividad)
    {
        $temarios = Temario::whereRelation('actividad', 'nombre', '=', $actividad->nombre)->whereRelation('estado', 'activo', '=', '1')->get();
        return view('estudiantes.temarios', compact('temarios'));
    }
    public function porTemario($id)
    {
        $temarios = Temario::where('id', $id)->get();

        return view('estudiantes.view-temario', compact('temarios'));
    }

    //VOCALES
    public function indexA()
    {
        return view('estudiantes.rompecabezas.vocales.a.index');
    }

    public function indexE()
    {
        return view('estudiantes.rompecabezas.vocales.e.index');
    }

    public function indexI()
    {
        return view('estudiantes.rompecabezas.vocales.i.index');
    }

    public function indexO()
    {
        return view('estudiantes.rompecabezas.vocales.o.index');
    }

    public function indexU()
    {
        return view('estudiantes.rompecabezas.vocales.u.index');
    }
    //
    //NUMEROS
    public function indexNU()
    {
        return view('estudiantes.rompecabezas.numeros.1.index');
    }

    public function indexND()
    {
        return view('estudiantes.rompecabezas.numeros.2.index');
    }

    public function indexNT()
    {
        return view('estudiantes.rompecabezas.numeros.3.index');
    }

    public function indexNC()
    {
        return view('estudiantes.rompecabezas.numeros.4.index');
    }

    public function indexNCC()
    {
        return view('estudiantes.rompecabezas.numeros.5.index');
    }
    //
    //FAMILIA
    public function indexPa()
    {
        return view('estudiantes.rompecabezas.familia.padre.index');
    }

    public function indexMa()
    {
        return view('estudiantes.rompecabezas.familia.madre.index');
    }

    public function indexHer()
    {
        return view('estudiantes.rompecabezas.familia.hermano.index');
    }

    public function indexAbu()
    {
        return view('estudiantes.rompecabezas.familia.abuelo.index');
    }

    public function indexPri()
    {
        return view('estudiantes.rompecabezas.familia.primo.index');
    }
    //ANIMALES
    public function indexElef()
    {
        return view('estudiantes.rompecabezas.animales.elefante.index');
    }

    public function indexGall()
    {
        return view('estudiantes.rompecabezas.animales.gallo.index');
    }

    public function indexGat()
    {
        return view('estudiantes.rompecabezas.animales.gato.index');
    }

    public function indexPerr()
    {
        return view('estudiantes.rompecabezas.animales.perro.index');
    }

    public function indexVac()
    {
        return view('estudiantes.rompecabezas.animales.vaca.index');
    }
    //
}
