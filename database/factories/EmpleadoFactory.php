<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> fake()-> firstName(),
            'cargo'=> fake()-> randomElement(['Gerente', 'Agente de Ventas', 'Atencion al cliente', 'Vendedor Ambulante', 'Conductor', 'Cargador']),
            'direccion'=> fake()-> address(),
            'fecha_de_ingreso'=> fake()-> date(),
            'sueldo'=> fake()-> randomNumber()
        ];
    }
}
