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
            "name" => [
                'uz' => fake()->sentence(3),
                'ru' => 'Вызов неопределенного',
            ],
            "price" => rand(10000,500000),
            "description" => [
                'uz' => fake()->paragraph(5),
                'ru' => 'Вызов неопределенного Вызов неопределенного Вызов неопределенного',
            ]
        ];
    }
}
