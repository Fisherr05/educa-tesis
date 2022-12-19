<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cualidad extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'cualidades';

    protected $fillable = ['nombre'];

}
