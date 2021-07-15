<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class);
    }
}
