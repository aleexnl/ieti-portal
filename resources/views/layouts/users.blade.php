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

<body class="antialiased">
    <div class="md:flex md:min-h-screen w-full ">
        <div class="flex flex-col w-full md:w-64 text-gray-500 text-lg bg-white flex-shrink-0 bg-blue-900">
            <div class="w-full text-center flex justify-center mt-11 mb-8">
                <x-application-logo class="h-32 w-32" />
            </div>
            <div class="bg-blue-700	 ">
                <div class="text-opacity-100" style="color: #25AAE2">
                    <p class="ml-10 my-4 " href="#">Panel de control </a>
                </div>
            </div>
            <nav class="flex-grow md:block pb-4 md:pb-0 md:overflow-y-auto">
                <div class="flex flex-col w-full">
                    <a class="ml-10 my-4 " href="#">Cursos </a>

                    <a class="ml-10 my-4" href="#">Alumnes</a>
                </div>
            </nav>
        </div>
        <main class="w-full container mx-auto">
            <h2 class="text-gray-700 ml-4 my-6 text-4xl">{{ $header }}</h2>
            <div class="w-full">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>