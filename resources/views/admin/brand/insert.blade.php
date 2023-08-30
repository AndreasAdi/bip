<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl px-2 py-16 mx-auto md-px-32">
        <form action="/admin/brand/insert" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Brand</label>
                <input type="text" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Brand" name="name" required>
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

                <textarea id="deskripsi" name="description"></textarea>
            </div>



            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo
                    Brand</label>
                <input type="file" data-allow-reorder="true" data-max-file-size="3MB" class="filepond" name="image"
                    id="image">
            </div>


            <x-primary-button class="w-full">
                {{ __('Tambah Brand') }}
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

            $('#category').select2();

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