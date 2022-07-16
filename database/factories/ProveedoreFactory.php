<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'compania'=> fake()-> company(),
            'direccion'=> fake()-> address(),
            'fecha_de_surtido'=> fake()-> date(),
            'observaciones'=> fake()->paragraph()

        ];
    }
}
