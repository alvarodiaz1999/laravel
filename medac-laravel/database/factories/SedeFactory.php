<?php

namespace Database\Factories;

use App\Models\modelsede;
use Illuminate\Database\Eloquent\Factories\Factory;

class SedeFactory extends Factory
{
        protected $model = modelsede::class;
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
            return [
                'ID' => $this->faker->name(),
                'Nombre' => $this ->faker->date(),
                'Localizacion' => $this ->faker->text(),
            ];
        }
    }

