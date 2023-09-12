<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Slide') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl px-2 py-16 mx-auto md-px-32">
        <div class="mb-8">

            <a href="/admin/slide"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                <svg class="w-5 h-5 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                </svg>
                <span class="sr-only"> Back</span>
            </a>
        </div>
        <form action="/admin/slide/store" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Slide</label>
                <input type="text" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Judul Slide" name="title" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                    Deskripsi Slide
                </label>
                <textarea class="w-full border border-gray-300 rounded-lg bg-gray-50" name="description" id="description" cols="30"
                    rows="10">

                </textarea>
            </div>


            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                    Slide</label>
                <input type="file" data-allow-reorder="true" data-max-file-size="3MB" class="filepond" name="image"
                    id="image">
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Background
                    Slide</label>
                <input type="file" data-allow-reorder="true" data-max-file-size="3MB" class="filepond" name="bgimage"
                    id="bgimage">
            </div>


            <x-primary-button class="w-full">
                {{ __('Tambah Slide') }}
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
            $('#brand').select2();
            $("#sub-category").select2({
                tags: true,
                tokenSeparators: [',']
            })
            //select the input and turn it into a pond
            const image = FilePond.create(document.querySelector('#image'));
            const bgimage = FilePond.create(document.querySelector('#bgimage'));


            image.setOptions({
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

            bgimage.setOptions({
                server: {
                    process: '{{ route('uploadbg') }}',
                    revert: (uniqueFileId, load, error) => {

                        //delete file
                        deleteBg(uniqueFileId);

                        error('Error terjadi saat delete file');

                        load();
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            })

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

            function deleteBg(nameFile) {
                $.ajax({
                    url: '{{ route('hapusbg') }}',
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
