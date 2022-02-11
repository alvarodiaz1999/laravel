<?php

namespace Database\Seeders;

use App\Models\modelsede;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelsede::factory()->times(48)->create();
    }
}
