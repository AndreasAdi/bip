<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Brand') }}
        </h2>
    </x-slot>

    @isset($success)
        <x-toast />
    @endisset

    @livewire('table-brand')

    <script>
        function deleteBrand($id) {
            if (confirm('Are you sure want to delete this Brand?')) {
                window.location.href = '/admin/brand/delete/' + $id
            }
        }
    </script>
</x-app-layout>
