<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake('id_ID')->name(),
            'nim' =>fake()->numberBetween(123456789,99999999),
            'tempat_lahir'=>'cilegon'. fake()->numberBetween(10,11),
            'tanggal_lahir'=>'07/10/2024'. fake()->numberBetween(10,11),
        ];
    }
}
