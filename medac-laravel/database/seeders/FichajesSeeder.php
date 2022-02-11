<?php

namespace Database\Seeders;

use App\Models\modelfichajes;
use Illuminate\Database\Seeder;

class FichajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelfichajes::factory()->times(48)->create();
    }
}
