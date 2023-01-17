<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'docentes';

    protected $fillable = ['id_usuario'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function niveles()
    {
    return $this->belongsToMany('App\Models\Nivel','docente_nivel'/*, 'id_docente', 'id'*/)->withtimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usuario');
    }

}
