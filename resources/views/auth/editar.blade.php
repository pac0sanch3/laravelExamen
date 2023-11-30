@extends('layouts.app')

@section('titulo')
    Editar Usuario
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center" >
        <div class="md:flex md:justify-center md:gap-10 bg-stone-200 md:w-4/12 ">
            <form   action="{{route('editar.update', $usuario->id) }}" method="post" >
                @csrf
                @method('put')
                    <div class="mb-6">
                        <label for="name" class="mb-3 mt-3 block">Nombre</label>
                        <input type="text" id="name" name="name" value="{{ $usuario->name }}" placeholder="Nombre">
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="cedula" class="mb-3 block">Cedula</label>
                        <input type="number" id="cedula" name="cedula" value="{{ $usuario->cedula }}" placeholder="Cedula">
                        @error('cedula')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="telefono" class="mb-3 block ">Telefono</label>
                        <input type="number" id="telefono" name="telefono" value="{{ $usuario->telefono }}" placeholder="Telefono">
                        @error('telefono')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="direccion" class="mb-3 block ">Direccion</label>
                        <input type="text" id="direccion" name="direccion" value="{{ $usuario->direccion }}" placeholder="Direccion">
                        @error('direccion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                <form action="/usuario">
                    <input type="submit" value="Actualizar Usuario" class="bg-sky-600 mb-6 hover:bg-sky-700 transition-color cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                </form>
            </div>
        </form>
    </div>

@endsection