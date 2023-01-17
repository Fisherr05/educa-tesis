<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioPendiente extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'usuarios_pendientes';

    protected $fillable = ['nombres','apellidos','direccion','telefono','tipo','email','id_nivel','password'];
}
