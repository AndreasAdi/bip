<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Slide') }}
        </h2>
    </x-slot>

    <main class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <a href="{{ route('slide.create') }}"
            class="inline-flex items-center px-3 py-2 mb-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <svg class="w-4 h-4 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
            Add
            Slide</a>

        <div class="flex flex-wrap gap-4">
            @foreach ($slides as $item)
                <div class="max-w-md p-4 bg-white border rounded-lg shadow-md">
                    <h1 class="my-2 text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                        {{ $item->title }}
                    </h1>
                    <img class="object-cover w-full rounded-sm h-52" src="{{ asset($item->bg_image) }}" alt="">
                    <div class="flex justify-between">
                        <a href="{{ route('slide.edit', $item->id) }}"
                            class="flex items-center px-4 py-2 mt-2 text-white rounded bg-bip-orange-500 hover:bg-bip-orange-600">
                            <svg class="w-4 h-4 mr-2 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="m13.835 7.578-.005.007-7.137 7.137 2.139 2.138 7.143-7.142-2.14-2.14Zm-10.696 3.59 2.139 2.14 7.138-7.137.007-.005-2.141-2.141-7.143 7.143Zm1.433 4.261L2 12.852.051 18.684a1 1 0 0 0 1.265 1.264L7.147 18l-2.575-2.571Zm14.249-14.25a4.03 4.03 0 0 0-5.693 0L11.7 2.611 17.389 8.3l1.432-1.432a4.029 4.029 0 0 0 0-5.689Z" />
                            </svg>

                            Edit</a>
                        <form action="{{ route('slide.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="flex items-center justify-center px-4 py-2 mt-2 text-red-600 border border-red-600 rounded-md group hover:bg-red-600 hover:text-white">
                                <svg class="w-4 h-4 mr-2 text-red-600 group-hover:text-white dark:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 20">
                                    <path
                                        d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                </svg>
                                Delete</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

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
    </script>

</x-app-layout>
