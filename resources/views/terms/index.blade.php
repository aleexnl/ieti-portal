<x-admin-layout>
    <x-slot name="header">
        Cursos
    </x-slot>
    <div class="relative hidden" id="confirm-delete">
        <div
            class="p-6 bg-red-400 rounded-md w-3/4 md:w-2/5 overflow-x-hidden flex flex-col overflow-y-hidden z-50 fixed top-0 left-0 bottom-0 right-0 mx-auto my-10 h-64 ">
            <x-x-icon class="text-red-900 cursor-pointer ml-auto hover:text-red-600 delete-modal-close" />
            <h3 class="text-red-50">¿Borrar curs?</h3>
            <p class="text-red-50">Per confirmar, si us plau, introduiu el nom del curs <b></b>.</p>
            <input type="text" class="my-2">
            <button class="delete-button" disabled>
                Eliminar
            </button>
        </div>
    </div>
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
            @if ($term->active)
            <tr class="accordion">
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <x-chevron-down class="w-6 mr-2 transform inline toggler" />
                        <span>{{$term->name}}</span>
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
            @endif
            @endforeach
            @endif
        </tbody>
    </table>

</x-admin-layout>