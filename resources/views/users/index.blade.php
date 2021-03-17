<x-admin-layout>
    <x-slot name="header">
        {{ Breadcrumbs::render('students') }}
    </x-slot>

    <div class="errores">

    </div>
    <label for="form-file" class="primary p-3 rounded-md">Importar alumnos ➤</label>
    <input type="file" accept=".csv" name="file" id="form-file" class="hidden" />


    <div id="create-user-form" class="bg-gray-200 p-6 my-3 rounded-md hidden mt-4">
        <div class="flex flex-col mb-2">
            <label for="user">Nom</label>
            <input type="text" name="user" id="user_name">
        </div>
        <div class="flex flex-col mb-2">
            <label for="user">Email</label>
            <input type="text" name="user" id="user_name">
        </div>
        <div class="flex flex-col mb-2">
            <label for="user">Fecha de creacion</label>
            <input type="text" name="user" id="user_name">
        </div>
        <div class="flex flex-col mb-2">
            <label for="user">Fecha de ultima actualizacion</label>
            <input type="text" name="user" id="user_name">
        </div>

    </div>
    <table class="w-full users mt-4">
        <thead>
            <tr>
                <th class="dark:bg-purple-900">Nom</th>
                <th class="dark:bg-purple-900">Email</th>
                <th class="dark:bg-purple-900">Fecha de creacion</th>
                <th class="dark:bg-purple-900">Fecha de ultima actualizacion</th>

            </tr>
        </thead>
        <tbody>
            @if ($users)
            @foreach ($users as $user)
            <tr class="accordion cursor-pointer" data-href="cursos/{{$user->id}}/cicles">
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <p id="name" value="{{$user->id}}">
                            {{$user->name}}
                        </p>
                    </div>
                </td>
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <p id="name" value="{{$user->id}}">
                            {{$user->email}}
                        </p>
                    </div>
                </td>
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <p id="name" value="{{$user->id}}">
                            {{$user->created_at}}
                        </p>
                    </div>
                </td>
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <p id="name" value="{{$user->id}}">
                            {{$user->updated_at}}
                        </p>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    {{$users->links()}}
</x-admin-layout>