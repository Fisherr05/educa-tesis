<?php

namespace Database\Factories;

use App\Models\Nivele;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NiveleFactory extends Factory
{
    protected $model = Nivele::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'paralelo' => $this->faker->name,
        ];
    }
}
