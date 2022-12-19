<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtemario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'subtemarios';

    protected $fillable = ['nombre','ruta_recurso','id_estado'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    
}
