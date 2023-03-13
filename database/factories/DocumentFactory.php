<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'tarikh_diterbitkan' => fake()->date(),
            'nama_penulis' => fake()->firstName(),
            'disahkan_oleh' => fake()->lastName(),
            'tarikh_disahkan' => fake()->date()
        ];
    }
}
