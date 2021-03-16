<x-admin-layout>
    <x-slot name="header">
        Cursos/{{$term->name}}/Cicles/{{$career->name}}
    </x-slot>
    <h1>¡ATENCIÓ!</h1>
    <p>Esteu a punt d'eliminar {{$career->name}}, aquesta acció pot causar inconsistencies a la aplicacio. ¿Voleu
        procedir?</p>
    <input type="text" placeholder="{{$career->name}}" class="mt-2" id="delete-checker">
    <div class="flex my-5">
        <a href="{{ URL::previous() }}">
            <button class="text-white bg-red-500 mr-5" autofocus>Cancela</button>
        </a>
        <form action="/admin/cursos/{{$term->id}}/cicles/{{$career->id}}" id="delete-form">
            <input type="submit" value="Elimina" disabled>
        </form>
    </div>
</x-admin-layout>