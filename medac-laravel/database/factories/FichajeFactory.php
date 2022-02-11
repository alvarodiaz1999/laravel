<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FichajeFactory extends Factory
{
    protected $model = CentroModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ID_Fichaje' => $this->faker->name(),
            'Hora de entrada' => $this ->faker->date(),
            'Hora de salida' => $this ->faker->date(),
            'ID_Empleado' => $this ->faker->text(),
        ];
    }
}
