@props(['active'])

@php
    $classes = $active ?? false ? 'flex items-center p-2 text-bip-blue-950 font-semibold bg-bip-blue-200 rounded-lg hover:bg-bip-blue-200  group' : 'flex items-center p-2 text-gray-900 rounded-lg  hover:bg-bip-blue-200  group';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
