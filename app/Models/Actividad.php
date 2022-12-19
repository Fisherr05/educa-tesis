<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'actividades';

    protected $fillable = ['nombre','id_nivel','id_estado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivel()
    {
        return $this->hasOne('App\Models\Nivel', 'id', 'id_nivel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temarios()
    {
        return $this->hasMany('App\Models\Temario', 'id_actividad', 'id');
    }

}
