<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=usuarios::all();
        return view('auth.usuarios',['usuarios' => $usuarios]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        return view('auth.editar', compact('usuario'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){
        $usuarios = Usuarios::find($id);

        //verificar que los datos agregados sean correctos
        $this->validate($request, [
            'name' => 'required',
            'cedula' => "numeric|required",
            'telefono' => 'numeric|required',
            'direccion' => "required",
        ]);

        //actulizar datos
        $usuarios->update([
            'name' => $request->name,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ]);
        return redirect()->route('usuario.index')-> with('success', 'usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $id)
    {
        //
        $id->delete();
        return redirect ('usuarios');


    }

}
