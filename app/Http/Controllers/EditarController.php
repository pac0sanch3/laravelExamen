<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class EditarController extends Controller
{
    public function index(){
        return view('auth.editar');
    }
    public function edit(usuarios $usuarios){
        return view('auth.editar', compact('usuarios'));
    }
    public function update(Request $request, usuarios $usuarios){
        $usuarios->name = $request->name;
        $usuarios->cedula = $request->cedula;
        $usuarios->telefono = $request->telefono;
        $usuarios->direccion = $request->direccion;
        $usuarios->save();
        return redirect()->route('editar.index');
    }
}
