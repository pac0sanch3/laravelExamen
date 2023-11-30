<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request)

    {
        $request->request->add(['name'=>Str::slug($request->name)]);
        $request->request->add(['cedula'=>Str::slug($request->cedula)]);
        $request->request->add(['telefono'=>Str::slug($request->telefono)]);
        $request->request->add(['direccion'=>Str::slug($request->direccion)]);
        

        $this->validate($request,[
            'name'=>'required|min:5|max:50|unique:usuarios',
            'cedula'=>'required|unique:usuarios|min:5|max:50',
            'telefono'=>'required|unique:usuarios',
            'direccion'=>'required|unique:usuarios'
        ]);

        usuarios::create([
            'name'=>$request->name,
            'cedula'=>$request->cedula,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion
        ]);
        auth()->attempt([
            'name' => $request->name,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]); 
        return view('auth.register');

    }
}
