<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl px-2 py-16 mx-auto md-px-32">
        <form action="/admin/product/insert" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Produk</label>
                <input type="text" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Produk" name="name" required>
            </div>
            <div class="mb-6">
                <label for="kategori"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="kategori"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="category">

                    <option value="1">Banking</option>
                    <option value="2">IT</option>
                    <option value="3">Office</option>
                    <option value="4">Machine</option>
                    <option value="5">Certification</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                <select id="brand"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="brand">

                    @foreach ($brands as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                    Product</label>

                <textarea class="h-96" id="deskripsi" name="description"></textarea>
            </div>
            <div class="mb-6">
                <label for="video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video
                    Produk</label>
                <input type="text" id="video"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan Link Youtube " name="video" required>
            </div>


            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                    Product</label>
                <input type="file" multiple data-allow-reorder="true" data-max-file-size="3MB"
                    data-max-files="5"class="filepond" name="image" id="image">
            </div>


            <x-primary-button class="w-full">
                {{ __('Tambah Produk') }}
            </x-primary-button>

        </form>

    </div>
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
