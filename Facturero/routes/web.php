<?php

use App\Http\Controllers\FacturaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/**
 * Factura
 */
Route::get('facturas', [FacturaController::class, 'index'])->name('facturas.index');

Route::get('facturas/create', [FacturaController::class, 'create'])->name('facturas.create');

Route::post('facturas', [FacturaController::class, 'store'])->name('facturas.store');

Route::get('facturas/{id}', [FacturaController::class, 'show'])->name('facturas.show');

/**
 * Cliente
 */

Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');

/**
 * Reservacion
 */

Route::get('reservaciones', [ReservacionController::class, 'index'])->name('reservaciones.index');

Route::get('reservaciones/create', [ReservacionController::class, 'create'])->name('reservaciones.create');

Route::post('reservaciones', [ReservacionController::class, 'store'])->name('reservaciones.store');

Route::get('reservaciones/{id}', [ReservacionController::class, 'show'])->name('reservaciones.show');
