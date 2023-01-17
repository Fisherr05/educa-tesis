<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosPendiente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'usuariosPendientes';

    protected $fillable = ['nombres','apellidos','direccion','telefono','tipo','email','profile_photo_path'];
	
}
