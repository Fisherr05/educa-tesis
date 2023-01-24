<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temario extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'temarios';

    protected $fillable = ['nombre','url_imagen','url_video','contenido','id_actividad','id_estado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividad()
    {
        return $this->hasOne(Actividad::class, 'id', 'id_actividad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }
}
