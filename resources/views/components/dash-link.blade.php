@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center px-6 py-2  text-red-400 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'
                : 'flex items-center px-6 py-2  text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 focus:outline-none transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
