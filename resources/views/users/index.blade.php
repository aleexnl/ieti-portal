<x-admin-layout>
    <x-slot name="header">
        Alumnes

    </x-slot>
    <div id="create-user-form" class="bg-gray-200 p-6 my-3 rounded-md hidden">
        <div class="flex flex-col mb-2">
            <label for="user">Nom</label>
            <input type="text" name="user" id="user_name">
        </div>
    </div>
    <table class="w-full terms">
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @if ($users)
            @foreach ($users as $user)
            <tr class="accordion cursor-pointer" data-href="cursos/{{$term->id}}/cicles">
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <x-chevron-down class="w-6 mr-2 transform inline toggler" />
                        <p id="name" value="{{$term->id}}">
                            {{$user->name}}
                        </p>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</x-admin-layout>