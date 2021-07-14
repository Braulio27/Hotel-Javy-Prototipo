<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idCliente')->constrained('cliente');
            $table->string('cantidadDePersonas');
            $table->dateTime('checkIn');
            $table->dateTime('checkOut');
            $table->text('comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservacion');
    }
}
