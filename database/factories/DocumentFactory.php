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
            //
            'name' => fake()->name(),
            'tarikh_diterbitkan' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'nama_penulis' => fake()->name(),
            'nama_pelulus' => fake()->name(),
            'tarikh_disahkan' => fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
