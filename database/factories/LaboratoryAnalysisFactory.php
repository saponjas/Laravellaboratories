<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratoryAnalysisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "laboratory_id" => $this->faker->numberBetween(1, 5),
            "analysis_id" => $this->faker->numberBetween(1, 15),
            "price" => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
