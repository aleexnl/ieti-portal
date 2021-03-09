<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="antialiased bg-gray-50">
    <nav class="h-full w-56 bg-gray-200 fixed top-0 left-0 z-50 overflow-x-hidden">
        <div class="m-5 flex justify-center">
            <x-application-logo class="w-28 fill-current text-gray-900" />
        </div>
        <div class="flex justify-center">
            <span class="bg-red-200 px-2 rounded-md text-red-700">Administració</span>
        </div>
        <div class="flex flex-col">
            <a class="py-4 pl-3" href="dashboard">Panel de control</a>
            <a class="py-4 pl-3 bg-red-200 text-red-700" href="cursos">Cursos </a>
            <a class="py-4 pl-3" href="alumnes">Alumnes</a>
        </div>

    </nav>
    <main class="ml-56">
        <h2 class="text-gray-700 ml-4 my-6 text-4xl">{{ $header }}</h2>
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </main>
</body>

</html>