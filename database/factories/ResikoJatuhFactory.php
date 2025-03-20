<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResikoJatuh>
 */
class ResikoJatuhFactory extends Factory
{
    public function definition(): array
    {
        return [
            'no_mr' => $this->faker->unique()->numerify('######'), // 6 digit angka unik
            'ruangan' => $this->faker->randomElement(['ICU', 'Kamar 1', 'Kamar 2', 'Kamar 3']),
            'bed' => $this->faker->bothify('B#'), // Contoh: B1, B2
            'nama' => $this->faker->name(),
            'risiko_jatuh' => $this->faker->randomElement(['Rendah', 'Sedang', 'Tinggi']),
        ];
    }
}
