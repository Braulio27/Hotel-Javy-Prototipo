<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::orderBy('id', 'desc')->paginate();
        return $clientes;
        /*return view('clientes.index', compact('Clientes'));*/
    }

    public function create(){
        /*return view('clientes.create');*/
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->name = $request->name;
        $cliente->descripcion = $request->descripcion;
        $cliente->categoria = $request->categoria;
        $cliente->save();
        return $cliente;
        /*return redirect('clientes.show', $cliente);*/
    }

    public function show($id){
        $cliente = Cliente::find($id);
        return $cliente;
        /*return view('clientes.show', compact('cliente'));*/
    }
}
