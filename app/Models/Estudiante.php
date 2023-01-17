<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'estudiantes';

    protected $fillable = ['id_usuario','id_nivel'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivel()
    {
        return $this->hasOne('App\Models\Nivel', 'id', 'id_nivel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }

}
