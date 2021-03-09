<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full ">
            <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-500 text-lg bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 bg-blue-900" x-data="{ open: false }">
                <div class="bg-blue-600	opacity-50 ">
                    <div class="text-blue-50">
                        <p class="ml-10 my-4 " href="#">Panel de control </a>
                    </div>
                </div>
                <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                    <div class="flex flex-col w-full items-center ">
                        <a class="mt-4" href="#">Cursos </a>

                        <a class="mt-4" href="#">Blog</a>
                    </div>
                </nav>
            </div>
        </div>
    </body>

    </html>

</x-app-layout>