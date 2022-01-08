<?php

namespace Database\Seeders;

use App\Models\LaboratoryAnalysis;
use Illuminate\Database\Seeder;

class LaboratoryAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LaboratoryAnalysis::factory(32)->create();
    }
}
