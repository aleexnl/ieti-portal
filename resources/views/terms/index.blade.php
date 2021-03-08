<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Terms') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <table class="w-full">
            <thead>
                <th>Nom</th>
                <th>Descripció</th>
                <th>Data Inici</th>
                <th>Data Fí</th>
            </thead>
            <tbody>
                @if ($terms)
                @foreach ($terms as $term)
                @if ($term->active)
                <tr>
                    <td>{{$term->name}}</td>
                    <td>
                        <p class="overflow-hidden overflow-ellipsis whitespace-nowrap w-36">{{$term->description}}</p>
                    </td>
                    <td>{{$term->start_date}}</td>
                    <td>{{$term->end_date}}</td>
                </tr>
                @endif
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-app-layout>