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
            'nama' => fake('ms_MY')->name(),
            'tarikh_diterbitkan' => fake('ms_MY')->dateTimeBetween('-23 years', 'now',),
            'nama_penulis' => fake('ms_MY')->firstName(),
            'disahkan_oleh' => fake('ms_MY')->lastName(),
            'tarikh_disahkan' => fake('ms_MY')->date(),
        ];
    }
}
