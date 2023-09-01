<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Produk') }}
        </h2>

    </x-slot>

    <x-toast />


    <div class="max-w-3xl px-2 py-16 mx-auto md-px-32">

        <div class="mb-8">

            <a href="/admin/brand"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                <svg class="w-5 h-5 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                </svg>
                <span class="sr-only"> Back</span>
            </a>
        </div>

        <form action="/admin/brand/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $brand->id }}">
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Brand</label>
                <input type="text" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Brand" name="name" required value="{{ $brand->name }}">
            </div>
            <div class="mb-6">
                <label for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="category[]" multiple>

                    <option value="1">Banking</option>
                    <option value="2">IT</option>
                    <option value="3">Office</option>
                    <option value="4">Machine</option>
                    <option value="5">Certification</option>

                </select>
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                    Brand</label>

                <textarea id="deskripsi" name="description">{{ $brand->description }}</textarea>
            </div>



            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo
                    Brand</label>
                <input type="file" data-allow-reorder="true" data-max-file-size="3MB" class="filepond" name="image"
                    id="image">
            </div>


            <div class="flex gap-2 mb-6">
                @foreach ($images as $image)
                    <div class="flex flex-col">
                        <img src="{{ $image }}" alt="" class="w-64 " />
                        <a class="w-full py-1 text-center text-white bg-red-500 rounded-b-md"
                            href="/admin/product/delete/image/{{ $brand->id . '/' . $loop->index }}">Hapus</a>
                    </div>
                @endforeach
            </div>


            <x-primary-button class="w-full" id="btn_add">
                {{ __('Update Brand') }}
            </x-primary-button>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/78z4m7tquef9qxfszdbtcrngjsw2ey3t2a52n6wuxx7jby2k/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
    <script src='https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js'></script>
    <script src='https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js'>
    </script>
    <script
        src='https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js'>
    </script>

    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>


    <script>
        tinymce.init({
            selector: 'textarea#deskripsi',
            plugins: 'lists',
            menubar: false,
            statusbar: false,
            toolbar: [{
                    name: 'history',
                    items: ['undo', 'redo']
                },

                {
                    name: 'formatting',
                    items: ['bold', 'italic']
                },
                {
                    name: 'alignment',
                    items: ['alignleft', 'aligncenter', 'alignright', 'alignjustify']
                },
                {
                    name: 'lists',
                    items: ['numlist', 'bullist']
                },
                {
                    name: 'insert',
                    items: ['link']
                }
            ]
        });

        FilePond.registerPlugin(
            // encodes the file as base64 data
            FilePondPluginFileEncode,

            // validates the size of the file
            FilePondPluginFileValidateSize,

            // corrects mobile image orientation
            FilePondPluginImageExifOrientation,

            FilePondPluginFilePoster,

            // previews dropped images
            FilePondPluginImagePreview
        )



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

            $('#category').select2();

            $('#category').val({!! $brand->category_id !!});
            $('#category').trigger('change');

            //select the input and turn it into a pond
            FilePond.create(document.querySelector('.filepond'));

            FilePond.setOptions({
                server: {
                    process: '{{ route('upload') }}',
                    revert: (uniqueFileId, load, error) => {

                        //delete file
                        deleteImage(uniqueFileId);

                        error('Error terjadi saat delete file');

                        load();
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },

            });

            function deleteImage(nameFile) {
                $.ajax({
                    url: '{{ route('hapus') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "DELETE",
                    data: {
                        image: nameFile
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(response) {
                        console.log('error')
                    }
                });
            }
        });
    </script>
</x-app-layout>
