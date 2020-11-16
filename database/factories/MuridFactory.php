<?php

namespace Database\Factories;

use App\Models\Murid;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuridFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Murid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'surat_awal' => $this->faker->numberBetween($min = 1, $max = 300),
            'ayat_awal' => $this->faker->numberBetween($min = 1, $max = 300),
            'surat_akhir' => $this->faker->numberBetween($min = 1, $max = 300),
            'ayat_akhir' => $this->faker->numberBetween($min = 1, $max = 300),
            'audio' => $this->faker->url(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
