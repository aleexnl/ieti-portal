<x-admin-layout>
    <x-slot name="header">
        Cursos/{{$term->name}}/Cicles/{{$career->name}}
    </x-slot>
    <h1>¡ATENCIÓ!</h1>
    <p>Esteu a punt d'eliminar {{$career->name}}, aquesta acció pot causar inconsistencies a la aplicacio. ¿Voleu
        procedir?</p>
    <div class="flex my-5">
        <a href="{{ URL::previous() }}">
            <button class="text-white bg-red-500 mr-5" autofocus>Cancela</button>
        </a>
        <form action="/admin/cursos/{{$term->id}}/cicles/{{$career->id}}" id="delete-form">
            <input type="submit" value="Elimina">
        </form>
    </div>
</x-admin-layout>