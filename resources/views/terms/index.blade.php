<x-admin-layout>
    <x-slot name="header">
        {{ Breadcrumbs::render('terms') }}
    </x-slot>
    <div class="errores">
    </div>
    <div id="create-course-form" class="bg-gray-200 p-6 my-3 rounded-md hidden dark:bg-purple-200">
        <div class="flex flex-col mb-2">
            <label for="course">Nom del Curs</label>
            <input type="text" name="course" id="course_name">
        </div>
        <div class="flex flex-col mb-2">
            <label for="description">Descripció</label>
            <textarea type="text" name="description" id="course_description"></textarea>
        </div>
        <div class="flex flex-col mb-2">
            <label for="description">Data Inici</label>
            <input type="date" name="description" id="course_start" />
        </div>
        <div class="flex flex-col mb-2">
            <label for="description">Data Fi</label>
            <input type="date" name="description" id="course_end" />
        </div>
        <div class="flex mt-2">
            <button class="bg-gray-300 dark:bg-purple-700 dark:text-purple-200 mr-2" id="add-course">Crea</button>
            <button class="secondary mr-2 dark:bg-purple-200" id="cancel-course-creation">Cancela</button>
        </div>

    </div>
    <div class="flex">
        <button id="add-new-term" class="bg-gray-300 dark:bg-purple-900 dark:text-white">Crear un curs</button>
    </div>
    <table class=" w-full terms">
        <thead>
            <tr>
                <th class="dark:bg-purple-900">Nom</th>
                <th class="dark:bg-purple-900">Descripció</th>
                <th class="dark:bg-purple-900">Data Inici</th>
                <th class="dark:bg-purple-900">Data Fí</th>
            </tr>
        </thead>
        <tbody>
            @if ($terms)
            @foreach ($terms as $term)
            @if (!$term->trashed())
            <tr class="accordion cursor-pointer" value="{{$term->id}}" data-href="cursos/{{$term->id}}/cicles">
                <td class="bg-gray-300 dark:bg-purple-300 w-1/4">
                    <div class="flex">
                        <x-chevron-down class="w-6 mr-2 transform inline toggler dark:text-purple-700" />
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
                <td class="bg-gray-300 dark:bg-purple-300">{{$term->start_date}}</td>
                <td class="bg-gray-300 dark:bg-purple-300">
                    <div class="flex flex-col" value="{{$term->id}}">
                        <p>
                            {{$term->end_date}}
                        </p>
                        <div class="flex flex-col controls hidden">
                            <button class="primary bg-gray-300 dark:bg-purple-900 dark:text-white my-1 w-full edit-button" value="{{$term->id}}">Editar</button>
                            <a href="cursos/{{$term->id}}">
                                <button class="secondary bg-gray-300 dark:bg-purple-200 dark:text-gray-900 my-1 w-full delete-button" id="delete-button">Eliminar</button>
                            </a>
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