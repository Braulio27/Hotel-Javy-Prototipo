<?php

namespace Database\Factories;
require_once 'vendor/autoload.php';
use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //


            'idCliente' => \App\Models\Cliente::inRandomOrder()->first()->id,
            'monto' =>$this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'fecha' =>$this->faker->dateTimeBetween('-1 day', now()),
        ];
    }
}
