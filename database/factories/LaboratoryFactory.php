<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->safeEmail(),
            "address" => $this->faker->streetAddress(),
            "city" => $this->faker->city(),
        ];
    }
}
