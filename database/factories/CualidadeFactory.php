<?php

namespace Database\Factories;

use App\Models\Cualidade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CualidadeFactory extends Factory
{
    protected $model = Cualidade::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
        ];
    }
}
