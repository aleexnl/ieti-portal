@props(['active'])

@php
$classes = ($active ?? false)
? 'py-4 pl-3 bg-red-200 text-red-700'
: 'py-4 pl-3';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>