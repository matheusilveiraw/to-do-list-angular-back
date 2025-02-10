<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'descricao' => $this->faker->sentence(6), // Gera uma frase aleatória
            'prazo' => $this->faker->dateTimeBetween('now', '+1 month'), // Data futura
            'status' => $this->faker->boolean(10), // 10% de chance de ser true
        ];
    }
}