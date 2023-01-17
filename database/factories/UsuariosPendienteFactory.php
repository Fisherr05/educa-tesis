<?php

namespace Database\Factories;

use App\Models\UsuariosPendiente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuariosPendienteFactory extends Factory
{
    protected $model = UsuariosPendiente::class;

    public function definition()
    {
        return [
			'nombres' => $this->faker->name,
			'apellidos' => $this->faker->name,
			'direccion' => $this->faker->name,
			'telefono' => $this->faker->name,
			'tipo' => $this->faker->name,
			'email' => $this->faker->name,
			'profile_photo_path' => $this->faker->name,
        ];
    }
}
