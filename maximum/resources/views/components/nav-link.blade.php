@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-amber-500 text-sm font-medium leading-5 focus:outline-none focus:border-amber-700 transition duration-150 ease-in-out hover:no-underline hover:text-amber-400'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:border-amber-600 focus:outline-none focus:text-gray-700 hover:text-amber-400 focus:border-gray-300 transition duration-150 ease-in-out hover:no-underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
