@props(['active'])

@php
$classes = ($active ?? false)
? 'py-4 pl-3 bg-gray-300 text-gray-700'
: 'py-4 pl-3';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>