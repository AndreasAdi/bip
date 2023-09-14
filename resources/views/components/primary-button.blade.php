<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-3 bg-bip-blue-600 dark:bg-bip-blue-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-bip-blue-800 uppercase tracking-widest hover:bg-bip-blue-700 dark:hover:bg-white focus:bg-bip-blue-700 dark:focus:bg-white active:bg-bip-blue-900 dark:active:bg-bip-blue-300 focus:outline-none focus:ring-2 focus:ring-bip-blue-500 focus:ring-offset-2 dark:focus:ring-offset-bip-blue-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
