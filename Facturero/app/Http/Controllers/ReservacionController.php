<?php

namespace App\Http\Controllers;
use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    public function index(){
        $reservaciones = Reservacion::orderBy('id', 'desc')->paginate();
        return view('reservaciones.index', compact('Reservaciones'));
    }

    public function create(){
        return view('reservaciones.create');
    }

    public function store(Request $request){
        $reservacion = new Reservacion();
        $reservacion->name = $request->name;
        $reservacion->descripcion = $request->descripcion;
        $reservacion->categoria = $request->categoria;
        $reservacion->save();
        return redirect('reservaciones.show', $reservacion);
    }

    public function show($id){
        $reservacion = Reservacion::find($id);
        return view('reservaciones.show', compact('reservacion'));
    }
}
