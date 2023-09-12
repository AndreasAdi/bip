@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 my-2 border-b-8 border-bip-orange-400 dark:border-indigo-600 text-2xl font-medium leading-5 text-bip-blue-900 dark:text-gray-100 focus:outline-none focus:border-bip-orange-600 transition duration-150 ease-in-out font-big_noodle_titling' : 'inline-flex items-center px-1 pt-1 my-2 border-b-8 border-transparent text-2xl font-medium leading-5 text-bip-blue-900 dark:text-gray-400 hover:text-bip-blue-900 dark:hover:text-gray-300 hover:border-bip-orange-400 dark:hover:border-gray-700 focus:outline-none focus:text-bip-blue-900 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out font-big_noodle_titling';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
