<x-main>
    <x-navbar-solid />
    <main class="p-2 py-8 md:px-32">


        <div class="mt-5">
            <div class="relative w-full h-48 overflow-hidden rounded-lg shadow-xl md:h-80"><img alt="Company Profile"
                    class="absolute inset-0 object-cover w-full h-full" src="/images/company-profile.jpg">
                <div class="absolute inset-0 bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500/90"></div>
                <div class="relative flex flex-col items-center justify-center h-full gap-2 p-2 text-center">
                    <div class="text-4xl font-bold text-white">Banking</div>
                    <div class="w-1/4 h-2 bg-white rounded-md"></div>
                </div>
            </div>
            {{-- <h1 class="mt-5 mb-3 text-2xl font-semibold text-center">Banking Equipment</h1>
            <div class="w-1/5 h-2 mx-auto rounded-lg s bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div> --}}
            <div class="flex w-full mt-5 ">
                <a href="/pdf/katalog-banking.pdf" download="Katalong Banking Equipment"
                    class="inline-flex px-6 py-3 ml-auto font-bold text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-brhover:from-bip-orange-400 hover:to-bip-orange-300">
                    <svg class="w-6 h-6 pr-2 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                        <path
                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg>
                    Download Katalog
                </a>
            </div>

            <div class="grid grid-cols-1 gap-10 mt-5 md:grid-cols-2 lg:grid-cols-4">
                <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                        alt="about-us" class="absolute inset-0 object-cover w-full h-full"
                        src="https://www.satkomindo.com/assets/EDC-26a1c5e5.jpg">
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                    <div class="relative p-4 ">
                        <div class="flex items-center justify-center h-80">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="text-xl font-bold text-center text-white">POS / Smart POS</div>
                                <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                <div class="flex">
                                    <a href="/banking/list/pos"
                                        class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                        Lihat Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                        alt="about-us" class="absolute inset-0 object-cover w-full h-full"
                        src="https://www.satkomindo.com/assets/CRM-8dd97bd0.jpg">
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                    <div class="relative p-4 ">
                        <div class="flex items-center justify-center h-80">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="text-xl font-bold text-center text-white">CRM & ATM</div>
                                <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                <div class="flex">
                                    <div
                                        class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                        Lihat Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                        alt="about-us" class="absolute inset-0 object-cover w-full h-full"
                        src="https://www.satkomindo.com/assets/TCR-6894aebf.jpg">
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                    <div class="relative p-4 ">
                        <div class="flex items-center justify-center h-80">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="text-xl font-bold text-center text-white"> Teller Machine</div>
                                <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                <div class="flex">
                                    <div
                                        class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                        Lihat Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                        alt="about-us" class="absolute inset-0 object-cover w-full h-full"
                        src="images/checkencoder.jpg">
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                    <div class="relative p-4 ">
                        <div class="flex items-center justify-center h-80">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="text-xl font-bold text-center text-white">Encoder Machine
                                </div>
                                <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                <div class="flex">
                                    <div
                                        class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                        Lihat Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full overflow-hidden rounded-lg shadow-xl h-80 hover:shadow-2xl"><img
                        alt="about-us" class="absolute inset-0 object-cover w-full h-full" src="images/coincounter.png">
                    <div class="absolute inset-0 bg-gray-800 bg-opacity-70 "></div>
                    <div class="relative p-4 ">
                        <div class="flex items-center justify-center h-80">
                            <div class="flex flex-col items-center justify-center space-y-2">
                                <div class="text-xl font-bold text-center text-white">Coin Counter / Sorter
                                </div>
                                <div class="w-1/3 h-2 bg-white rounded-md"></div>
                                <div class="flex">
                                    <div
                                        class="px-2 py-2 mt-4 text-white border-2 border-white rounded-lg cursor-pointer">
                                        Lihat Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--
            @foreach ($data as $item)
                <div class="transition-transform ease-in-out border rounded-lg md:w-3/12 hover:scale-105">
                    <figure class="relative md:h-60">

                        <img class="h-auto max-w-full p-5 rounded-lg" src="{{ $images[$loop->index][1] }}"
                            alt="">

                        <a href="banking/{{ $item->id }}">
                            <figcaption
                                class="absolute inset-0 w-full h-full px-4 py-1 text-white bg-gray-800 rounded-lg bg-opacity-70">
                                <div class="relative p-4">
                                    <div class="flex items-center justify-center md:h-60">
                                        <div>
                                            <p class="text-lg font-bold text-center text-ellipsis">
                                                {{ $item->name }}
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            @endforeach --}}

        </div>
        {{-- <div class="flex justify-center">
            {{ $data->links() }}
        </div> --}}

        </div>

    </main>

    <x-footer />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>




</x-main>
