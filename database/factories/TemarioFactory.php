<?php

namespace Database\Factories;

use App\Models\Temario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TemarioFactory extends Factory
{
    protected $model = Temario::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'imagen' => $this->faker->name,
			'alt_imagen' => $this->faker->name,
			'video' => $this->faker->name,
			'contenido' => $this->faker->name,
			'id_actividad' => $this->faker->name,
			'id_estado' => $this->faker->name,
        ];
    }
}
