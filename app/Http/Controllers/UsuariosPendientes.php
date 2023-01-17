<?php

namespace App\Http\Controllers;

use App\Models\UsuarioPendiente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class UsuariosPendientes extends Controller
{
    public function index(){
        if('admin'){
            $usuariosPendientes=UsuarioPendiente::all();
        }else if('profesor'){
            $usuariosPendientes=UsuarioPendiente::where('tipo','estudiante');
        }

        dd($usuariosPendientes);
    }

    public function create(Request $request){
        $rules=[
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:10'],
            'tipo' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed']
        ];
        $this->validate($request,$rules);

        $request['password']=Hash::make($request['password']);
        UsuarioPendiente::create($request->all());
        return redirect()->route('home')->with('usuarioPendiente','Usuario creado con éxito, espere su aprobación');;
    }

    public function createUser(UsuarioPendiente $usuarioPendiente){
        if($usuarioPendiente->tipo=='docente'){

        }
        if($usuarioPendiente->tipo=='estudiante'){

        }
        //User::create("nombres");
    }
}
