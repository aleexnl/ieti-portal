<x-admin-layout>
    <x-slot name="header">
        Cursos/{{$term->name}}/Cicles
    </x-slot>
    <table class="w-full terms">
        <thead>
            <tr>
                <th>Codi</th>
                <th>Nom</th>
                <th>Descripció</th>
            </tr>
        </thead>
        <tbody>
            @if ($careers)
            @foreach ($careers as $career)
            <tr>
                <td>{{$career->code}}</td>
                <td>{{$career->name}}</td>
                <td>{{$career->description}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</x-admin-layout>