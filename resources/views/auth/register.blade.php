@extends('layouts.app')

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center" >
        <div class="md:flex md:justify-center md:gap-10 bg-stone-50 md:w-4/12 ">
            <form method="post">
                @csrf
                <div class="mb-6">
                    <label class="mb-3 block">Nombre</label>
                    <input type="text" id="name" name="name" @error('name') border-red-500 @enderror " value="{{ old('name') }}"> 
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div >
                <div class="mb-6">
                    <label class="mb-3 block" >Cedula</label>
                    <input type="text" id="cedula" name="cedula" @error('cedula') border-red-500 @enderror " value="{{ old('name') }}">
                    @error('cedula')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mb-3 block">Numero de Telefono</label>
                    <input type="text" id="telefono" name="telefono" @error('telefono') border-red-500 @enderror " value="{{ old('name') }}">
                    @error('telefono')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mb-3 block">Direccion</label>
                    <input type="text" id="direccion" name="direccion" @error('direccion') border-red-500 @enderror " value="{{ old('name') }}">
                    @error('direccion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection
