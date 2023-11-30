@extends('layouts.app')

@section('contenido')
    <table class="md:flex md:justify-center md:gap-10 md:items-center">
        <tr class="mb-7">
            <th >id</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>cedula</th>
            <th>direccion</th>
        </tr>
        @foreach ($usuarios as $usuario)
            <tr class="mr-3">
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->telefono  }}</td>
                <td>{{ $usuario->cedula  }}</td>
                <td>{{ $usuario->direccion  }}</td>
                <td><a href="{{ url('usuarios.edit/'.$usuario->id) }}">Editar</a></td>

                <td>
                    <form method="post" action="{{route('usuarios.destroy', $usuario->id)}}">
                                @csrf

                                {{method_field('DELETE')}}
                                <input type="submit" value="Borrar">

                    </form>
                </td>
                
            </tr>
            
        @endforeach

    </table>


@endsection
