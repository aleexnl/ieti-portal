<x-admin-layout>
    <x-slot name="header">
        {{ Breadcrumbs::render('careers', $term) }}
    </x-slot>
    <div class="errores">
    </div>
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
                <td>
                    <p id="code" value="{{$career->id}}">{{$career->code}}</p>
                </td>
                <td>
                    <p id="name" value="{{$career->id}}">{{$career->name}}</p>
                </td>
                <td>
                    <p id="description" value="{{$career->id}}">{{$career->description}}</p>
                </td>
                <td>
                    <div class="flex flex-col controls careerButtons" value="{{$career->id}}">
                        <button class="primary my-1 w-full editCareer-button" value="{{$career->id}}" id="editCareer-button">Editar</button>

                        <a href="cicles/{{$career->id}}">
                            <button class="secondary my-1 w-full delete-button" value="{{$career->id}}" id="delete-button">Eliminar</button>
                        </a>
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
            @endif
        </tbody>
    </table>
</x-admin-layout>