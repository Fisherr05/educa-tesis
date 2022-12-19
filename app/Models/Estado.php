<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	use HasFactory;

    public $timestamps = false;

    protected $table = 'estados';

    protected $fillable = ['nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividad', 'id_estado', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subtemarios()
    {
        return $this->hasMany('App\Models\Subtemario', 'id_estado', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temarios()
    {
        return $this->hasMany('App\Models\Temario', 'id_estado', 'id');
    }

}
