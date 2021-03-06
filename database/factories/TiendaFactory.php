<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tienda>
 */
class TiendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'nombre' => fake() -> company(),
            'ubicacion' => fake() -> address(),
            'gerente' => fake() -> firstName(),
            'fecha_de_creacion' => fake() -> date()
        ];
    }
}
