<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
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
						'team_id' => mt_rand(1,3),
            'karyawan' => $this->faker->name(),
            'jabatan' => $this->faker->words(1,true),
        ];
    }
}
