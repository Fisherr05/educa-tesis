<?php

namespace Database\Factories;

use App\Models\Subtemario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubtemarioFactory extends Factory
{
    protected $model = Subtemario::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'ruta_recurso' => $this->faker->name,
			'id_estado' => $this->faker->name,
        ];
    }
}
