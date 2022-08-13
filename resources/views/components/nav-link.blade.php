@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center p-3 font-medium hover:text-indigo-400 transition duration-200 border-b-2 border-red-400 text-indigo-400'
                : 'inline-flex items-center p-3 font-medium hover:text-indigo-400 transition duration-200 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
