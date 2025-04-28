<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => 'EE'.Str::random(10),
            'nom'=> fake()->name(),
            'prenom'=> fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => password_hash('password',PASSWORD_DEFAULT),
            'city' => fake()->city(),
            'salaire' => fake()->numberBetween(1000,10000),
            
            
        ];
    }
}
