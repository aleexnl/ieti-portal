<x-admin-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <div class="errores">
    </div>
    <div class="flex flex-col">
        <div class="bg-gray-100 dark:bg-purple-200 m-5 px-5 rounded-md">
            <a href="cursos">
                <h3 class="dark:text-purple-700">Cursos</h3>
            </a>
        </div>
        <div class="bg-gray-100 m-5 px-5 rounded-md dark:bg-purple-200">
            <a href="alumnes">
                <h3 class=" dark:text-purple-700">Alumnes</h3>
            </a>
        </div>
    </div>
</x-admin-layout>