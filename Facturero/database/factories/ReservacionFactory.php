<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Reservacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'idCliente' => Cliente::inRandomOrder()->first()->id,
            'cantidadDePersonas' =>$this->faker->randomDigit(),
            'checkIn' =>$this->faker->dateTimeBetween('-4 day', now()),
            'checkOut' =>$this->faker->dateTimeBetween('-1 day', now()),
            'comentarios' =>$this->faker->paragraph(),
        ];
    }
}
