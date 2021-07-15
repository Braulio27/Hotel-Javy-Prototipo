<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Reservacion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Cliente::factory(10)->create();
        Factura::factory(2)->create();
        Reservacion::factory(2)->create();
    }
}
