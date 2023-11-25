<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" => rand(1,5),
            "name" => $this->faker->sentence(3),
            "price" => rand(10000,500000),
            "description" => $this->faker->paragraph(5)
        ];
    }
}
