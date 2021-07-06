<?php

namespace Database\Factories;

use App\Models\Cuenta;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuenta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'saldo' => 10000,
            'numero' => $this->faker->randomNumber($nbDigits = 9, $strict = false),
            'propia' => True,
            'user_id' => User::all()->random()
        ];
    }
}
