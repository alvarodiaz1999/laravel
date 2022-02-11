<?php

namespace Database\Seeders;

use App\Models\CentroModel;
use Database\Factories\CentroModelFactory;
use Illuminate\Database\Seeder;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CentroModel::factory()->times(48)->create();
    }
}
