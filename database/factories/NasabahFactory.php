<?php

namespace Database\Factories;

use App\Models\Nasabah;
use Illuminate\Database\Eloquent\Factories\Factory;

class NasabahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nasabah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_nasabah' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'almt_nasabah' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            'jenis_kelamin' => "",
            'tmpt_lahir' => "",
            'tgl_lahir' => "",
            'status' => "",
            'agama' => "",
            'pekerjaan' =>  $this->faker->jobTitle(),
            'no_rekening' =>  $this->faker->creditCardNumber(),
            'saldo' =>  100,
            'password' =>  "123456",
            'kelurahan_id' =>  1,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {

    }
}
