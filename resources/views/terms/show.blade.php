<x-admin-layout>
    <x-slot name="header">
        {{ Breadcrumbs::render('term', $term) }}
    </x-slot>
    <div class="errores">
    </div>
    <h1 class="dark:text-purple-500">¡ATENCIÓ!</h1>
    <p class="dark:text-purple-200">Esteu a punt d'eliminar {{$term->name}}, aquesta acció pot causar inconsistencies a
        la aplicacio. ¿Voleu
        procedir?</p>
    <input type="text" placeholder="{{$term->name}}" class="mt-2" id="delete-checker">
    <div class="flex my-5">
        <a href="{{ URL::previous() }}">
            <button class="text-white bg-red-500 mr-5" autofocus>Cancela</button>
        </a>
        <form action="/admin/cursos/{{$term->id}}" id="delete-form">
            <input type="submit" value="Elimina">
        </form>
    </div>
</x-admin-layout>