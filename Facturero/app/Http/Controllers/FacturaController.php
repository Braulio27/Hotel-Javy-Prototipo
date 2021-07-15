<?php

namespace App\Http\Controllers;
use App\Models\Factura;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        $facturas = Factura::orderBy('id', 'desc')->paginate();
        return view('facturas.index', compact('Facturas'));
    }

    public function create(){
        return view('facturas.create');
    }

    public function store(Request $request){
        $factura = new Factura();
        $factura->name = $request->name;
        $factura->descripcion = $request->descripcion;
        $factura->categoria = $request->categoria;
        $factura->save();
        return redirect('facturas.show', $factura);
    }

    public function show($id){
        $factura = Factura::find($id);
        return view('facturas.show', compact('factura'));
    }
}
