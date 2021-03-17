<x-admin-layout>
    <x-slot name="header">
        Cursos/{{$term->name}}/Cicles
    </x-slot>
    <table class="w-full terms">
        <thead>
            <tr>
                <th class="dark:bg-purple-900">Codi</th>
                <th class="dark:bg-purple-900">Nom</th>
                <th class="dark:bg-purple-900">Descripció</th>
                <th class="dark:bg-purple-900">Accions</th>
            </tr>
        </thead>
        <tbody>
            @if ($careers)
            @foreach ($careers as $career)
            @if (!$career->trashed())
            <tr>
                <td>{{$career->code}}</td>
                <td>{{$career->name}}</td>
                <td>{{$career->description}}</td>
                <td>
                    <a href="cicles/{{$career->id}}">
                        <button class="secondary my-1 w-full delete-button" id="delete-button">Eliminar</button>
                    </a>
                </td>
            </tr>
            @endif
            @endforeach
            @endif
        </tbody>
    </table>
</x-admin-layout>