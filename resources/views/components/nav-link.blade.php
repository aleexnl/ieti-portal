@props(['active'])

@php
$classes = ($active ?? false)
? 'py-4 pl-3 bg-red-200 text-red-700 dark:text-purple-700 dark:bg-purple-200'
: 'py-4 pl-3';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>