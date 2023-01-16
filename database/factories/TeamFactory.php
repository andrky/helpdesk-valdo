<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team' => $this->faker->words(1,true),
						'divisi_id' => mt_rand(1,3),
        ];
    }
}
