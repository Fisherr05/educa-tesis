<?php

namespace Database\Factories;

use App\Models\Actividade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ActividadeFactory extends Factory
{
    protected $model = Actividade::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'id_nivel' => $this->faker->name,
			'id_estado' => $this->faker->name,
        ];
    }
}
