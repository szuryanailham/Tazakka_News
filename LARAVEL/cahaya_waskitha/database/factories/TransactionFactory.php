<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'user_id'=>$this->faker->randomDigit,
           'unit_id'=> $this->faker->randomDigit(),
           'durasi_sewa'=> $this->faker->randomDigitNotNull(),
           'lokasi_janji_temu'=>$this->faker->sentence(5),
           'jam_janji_temu' =>$this->faker->time(),
           'tanggal_penyewaan' =>$this->faker->date('Y_m_d'),
           'lokasi_pengembalian' =>$this->faker->sentence(5),
           'jam_pengembalian' => $this->faker->time(),
           'tanggal_pengembalian' =>$this->faker->date('Y_m_d'),
           'total_harga' => $this->faker->randomFloat(2, 10000, 1000000),
        ];
    }
}
