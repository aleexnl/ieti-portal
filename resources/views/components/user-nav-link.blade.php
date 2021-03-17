@props(['active'])

@php
$classes = ($active ?? false)
? 'py-4 pl-3 bg-gray-300 text-gray-700 dark:bg-blue-500 dark:bg-opacity-20 dark:text-blue-500'
: 'py-4 pl-3';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>