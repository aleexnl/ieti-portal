<x-admin-layout>
    <x-slot name="header">
        Cursos

    </x-slot>

    @section('breadcrumbs')
        {{ Breadcrumbs::render('term', $term) }}
    @endsection

    <div id="create-course-form" class="bg-gray-200 p-6 my-3 rounded-md hidden">

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
            <button class="primary mr-2" id="add-course">Crea</button>
            <button class="secondary mr-2" id="cancel-course-creation">Cancela</button>
        </div>

    </div>
    <div class="flex">
        <button id="add-new-term" class="primary">Crear un curs</button>
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
            <tr class="accordion cursor-pointer" data-href="cursos/{{$term->id}}/cicles">
                <td class="bg-gray-300 w-1/4">
                    <div class="flex">
                        <x-chevron-down class="w-6 mr-2 transform inline toggler" />
                        <p id="name" value="{{$term->id}}">
                            {{$term->name}}
                        </p>
                    </div>
                </td>
                <td>
                    <p class="overflow-hidden overflow-ellipsis whitespace-nowrap w-36" id="description"
                        value="{{$term->id}}">
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
            @endif
            @endforeach
            @endif
        </tbody>
    </table>

</x-admin-layout>