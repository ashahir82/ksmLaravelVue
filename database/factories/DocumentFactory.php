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
            'name' => fake('ms_MY')->name(),
            'tarikh_diterbitkan' => fake('ms_MY')->date($format = 'Y-m-d', $max = 'now'),
            'nama_penulis' => fake('ms_MY')->name(),
            'nama_pelulus' => fake('ms_MY')->name(),
            'tarikh_disahkan' => fake('ms_MY')->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
