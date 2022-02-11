<?php

namespace Database\Factories;

use App\Models\modelempleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    protected $model = modelempleados::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'Apellido' => $this ->faker->text(8),
         //   'Edad' => $this -> faker ->,
            'Domicilio' => $this -> faker ->text(),
            'ID_Sede' => $this -> faker ->text(),
        ];
    }
}
