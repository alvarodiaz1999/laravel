<?php

namespace Database\Seeders;

use App\Models\modelempleados;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelempleados::factory()->times(48)->create();
    }
}
