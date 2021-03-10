<x-admin-layout>
    <x-slot name="header">
        Cursos
    </x-slot>
    <div class="flex flex-col justify-center text-center">
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
                            <p id="name" value="{{$term->id}}">
                                {{$term->name}}
                            </p>
                        </div>
                    </td>
                    <td>
                        <p class="overflow-hidden overflow-ellipsis whitespace-nowrap w-36" id="description" value="{{$term->id}}">
                            {{$term->description}}
                        </p>
                    </td>
                    <td class="bg-gray-300">{{$term->start_date}}</td>
                    <td class="bg-gray-300">
                        <div class="flex flex-col" value="{{$term->id}}">
                            <p>
                                {{$term->end_date}}
                            </p>
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
        <div>
            <button class="primary">Añadir curso</button>
        </div>
        <div id="addForm">
        </div>
    </div>
</x-admin-layout>