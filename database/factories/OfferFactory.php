<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CorreoReclutador' => fake()->unique()->safeEmail(),
            'Empresa' => fake()->name(),
            'Puesto' => "FullStack Developer",
            'Titulo' => "Programador de Solidty  - Remote",
            'Informacion' => fake()->text(),
        ];
    }
}
