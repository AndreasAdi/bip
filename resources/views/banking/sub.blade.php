<x-main>
    <x-navbar-solid />
    <main class="p-2 py-8 md:px-32">


        <div class="mt-5">
            <div class="relative w-full h-48 overflow-hidden rounded-lg shadow-xl md:h-80"><img alt="Company Profile"
                    class="absolute inset-0 object-cover w-full h-full" src="/images/company-profile.jpg">
                <div class="absolute inset-0 bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500/90"></div>
                <div class="relative flex flex-col items-center justify-center h-full gap-2 p-2 text-center">
                    <div class="text-4xl font-bold text-white">{{ $subCategoryName }}</div>
                    <div class="w-1/4 h-2 bg-white rounded-md"></div>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-10 mt-5 md:grid-cols-2 lg:grid-cols-4">

                @foreach ($data as $item)
                    <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                            class="absolute inset-0 object-cover w-full h-full" src="{{ $images[$loop->index][1] }}"
                            alt="">
                        <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                        <div class="relative p-4 ">
                            <div class="flex items-center justify-center h-80">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <div class="text-xl font-bold text-center text-white">{{ $item->name }}</div>
                                    <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                    <div class="flex">
                                        <a href="/banking/product/{{ $item->id }}"
                                            class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                            Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="flex justify-center my-5">
            {{ $data->links() }}
        </div>

        </div>

    </main>

    <x-footer />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>




</x-main>
