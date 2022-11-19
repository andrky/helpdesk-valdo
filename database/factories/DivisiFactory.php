<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DivisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'divisi_nama' => $this->faker->words(1,true),
            'team' => $this->faker->words(1,true),
        ];
    }
}
