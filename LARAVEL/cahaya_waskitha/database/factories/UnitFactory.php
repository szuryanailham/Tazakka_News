<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
return [
    'kode_unit' => $this->faker->lexify('kode-????'),
    'nama_unit' => $this->faker->word(),
    'durasi_sewa' => $this->faker->randomNumber(2, false),
    'kapasitas' => $this->faker->randomDigitNotNull(),
    'drive_mode' => $this->faker->word(), // Use word() for a single word
    'category_id' => $this->faker->randomDigitNotNull(),
    'harga_sewa' => $this->faker->randomFloat(2, 10000, 1000000),
    'deskripsi' => $this->faker->paragraph(),
];

    }
}
