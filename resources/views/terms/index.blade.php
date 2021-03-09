<x-admin-layout>
    <x-slot name="header">
        Cursos
    </x-slot>

    <table class="w-full terms">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Descripció</th>
                <th>Data Inici</th>
                <th>Data Fí</th>
            </tr>
        </thead>
        <tbody>
            @if ($terms)
            @foreach ($terms as $term)
            <tr class="accordion">
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <x-chevron-down class="w-6 mr-2 transform inline toggler" />
                        {{$term->name}}
                    </div>
                </td>
                <td>
                    <p class="overflow-hidden overflow-ellipsis whitespace-nowrap w-36">
                        {{$term->description}}</p>
                </td>
                <td class="bg-gray-300">{{$term->start_date}}</td>
                <td class="bg-gray-300">
                    <div class="flex flex-col">
                        {{$term->end_date}}
                        <div class="flex flex-col controls hidden">
                            <button class="primary my-1 w-full edit-button" value="{{$term->id}}">Editar</button>
                            <button class="secondary my-1 w-full delete-button" value="{{$term->id}}">Eliminar</button>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</x-admin-layout>