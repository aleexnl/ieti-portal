<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Terms') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
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
                    <td>{{$term->name}} </td>
                    <td>
                        <p class="overflow-hidden overflow-ellipsis whitespace-nowrap w-36">
                            {{$term->description}}</p>
                    </td>
                    <td>{{$term->start_date}}</td>
                    <td>
                        <div class="flex flex-col">
                            {{$term->end_date}}
                            <div class="flex flex-col controls hidden">
                                <button class="primary my-1">Editar</button>
                                <button class="secondary my-1">Eliminar</button>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-app-layout>