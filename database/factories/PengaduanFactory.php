<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'divisi_id' => mt_rand(1,3),
						'karyawan_id' => mt_rand(1,3),
						'kategori_id' => mt_rand(1,3),
						'team_id' => mt_rand(1,3),
            'masalah' => $this->faker->words(1,true),
            'teknisi' => $this->faker->words(1,true),
            'penyelesaian' => $this->faker->words(1,true),
            'status' => $this->faker->words(1,true),
        ];
    }
}
