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
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivel()
    {
        return $this->hasOne(Nivel::class, 'id', 'id_nivel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temarios()
    {
        return $this->hasMany(Temario::class, 'id_actividad', 'id');
    }

}
