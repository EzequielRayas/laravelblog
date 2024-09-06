@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  hover:text-blue-500 text-sm text-blue-500'
            : 'inline-flex items-center  hover:text-blue-500 text-sm text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

