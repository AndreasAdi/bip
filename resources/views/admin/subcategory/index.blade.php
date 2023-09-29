<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Sub Kategori') }}
        </h2>
    </x-slot>

    @livewire('table-subcategory')

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            var success = @json(session()->get('success'));
            if (success) {
                Swal.fire({
                    title: 'Berhasil',
                    text: success,
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false,
                })
            }

            var error = @json(session()->get('error'));
            if (error) {
                Swal.fire({
                    title: 'Gagal',
                    text: error,
                    icon: 'error',
                    timer: 2000,
                    showConfirmButton: false,
                })
            }

        });

        function deleteProduct($id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',

                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',

                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/admin/product/delete/' + $id
                }
            })

            // if (confirm('Are you sure want to delete this product?')) {
            //     window.location.href = '/admin/product/delete/' + $id
            // }
        }
    </script>
</x-app-layout>
