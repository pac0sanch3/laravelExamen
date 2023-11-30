<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Laravel</title>
</head>
<body class="bg-gray-100">

<header class="flex items-center justify-between border-b p-5 bg-white  shadow">
    <h1 class="text-3xl font-bold">Hecarim Proyect</h1>
    <nav>
        <a href="{{ route('usuarios.index') }}"
        class="uppercase text-gray-600 font-bold text-small  hover:bg-gray-200">
        eliminar
        </a>
        <a href="{{ route('register.index') }}"
           class="uppercase text-gray-600 font-bold text-small  hover:bg-gray-200 ">
             Crear cuenta
        </a>
    </nav>
</header>
<main class="container mx-auto mt-10 ">
    <h2 class="font-black text-center text-3xl mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
<footer class="text-center p-5 text-gray-500 font-bold uppercase">
    Todos los derechos reservados  {{ date('Y') }}
</footer>
</body>
</html>
