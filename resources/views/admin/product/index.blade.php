<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Product') }}
        </h2>
    </x-slot>

    @isset($success)
        <x-toast />
    @endisset

    @livewire('table-product')


    <script>
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

        function search() {

            var search = $("#search").val();
            var tbody = $("#table-body");

            if (search.length != 0 && search.length < 2) {
                return;
            }

            $.ajax({
                url: '/admin/product/search',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    query: search
                },
                success: function(data) {
                    console.table(data);
                    tbody.empty();
                    tbody.append(data.rows)
                    $('ul.pagination').replaceWith(data.links);

                },
                error: function(response) {
                    console.log('error')
                }
            });
        }
    </script>
</x-app-layout>
