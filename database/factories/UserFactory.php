<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => "Nombre",
            'Apellido' => "Apellido",
            'Correo' => fake()->unique()->safeEmail(),
            'Clave' => '12345678',
            'LinkCV' => 'https://plataforma.com/enlace',
            'Biografia' => fake()->text(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        
    }
}
