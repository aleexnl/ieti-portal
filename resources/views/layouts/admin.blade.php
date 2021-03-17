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

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('images/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('images/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/') }}/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="antialiased bg-gray-50 dark:bg-gray-800">
    <nav class="h-full w-56 bg-gray-200 dark:bg-gray-900 fixed top-0 left-0 z-50 overflow-x-hidden">
        <div class="m-5 flex justify-center">
            <x-application-logo class="w-28 fill-current text-gray-900 dark:text-white" />
        </div>
        <div class="flex justify-center">
            <span
                class="bg-red-200 px-2 rounded-md text-red-700 dark:text-purple-700 dark:bg-purple-200">Administració</span>
        </div>
        <div class="flex flex-col mt-5">
            <x-nav-link href="{{route('admindashboard')}}" :active="(request()->segment(2) == 'dashboard')">
                Panel de control
            </x-nav-link>
            <x-nav-link href="{{route('admincursos')}}" :active="(request()->segment(2) == 'cursos')">
                Cursos
            </x-nav-link>
            <x-nav-link href="{{route('adminalumnes')}}" :active="request()->segment(2) == 'alumnes'">
                Alumnes
            </x-nav-link>
        </div>

    </nav>
    <main class="ml-56">
        <h2 class="text-gray-700 ml-4 my-6 text-4xl dark:text-purple-300">{{ $header }}</h2>
        <div class="container mx-auto px-5">
            {{ $slot }}
        </div>
    </main>
</body>

</html>