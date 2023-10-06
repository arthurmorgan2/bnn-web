<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PasienBaru;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienBaruFactory extends Factory
{

    protected $model = PasienBaru::class;

    public function definition()
    {

        return [
            'nama_lengkap' => $this->faker->name(),
            'nik' => $this->faker->unique()->numberBetween(15, 200),
            'tempat_lahir' => $this->faker->city(1),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-15 years', 'now'),
            'jenis_kelamin' => 'Laki-Laki',
            'alamat_lengkap' => $this->faker->address(),
            'agama' => 'Islam',
            'golongan_darah' => 'O',
            'no_wa' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
