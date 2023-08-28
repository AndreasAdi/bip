@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-bip-orange-500 dark:focus:border-bip-orange-400 focus:ring-bip-orange-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
]) !!}>
