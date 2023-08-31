<x-main>
    <x-navbar-solid />

    <main>
        <div class="grid grid-cols-1 gap-6 px-5 py-5 md:grid-cols-2 md:gap-12 lg:px-32 ">
            <div>
                <div class="grid gap-4">
                    <div class="col-1">
                        <img class="max-w-lg p-6 border rounded-lg" src="{{ $images[1] }}" alt="">
                    </div>
                    {{-- <div class="grid grid-cols-5 gap-4">
                        <div>
                            <img class="h-auto max-w-full p-6 border rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full p-6 border rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full p-6 border rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full p-6 border rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full p-6 border rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </div>
                    </div> --}}
                </div>

            </div>
            <div class="px-12">
                <h1 class="text-3xl font-semibold">{{ $data->name }}</h1>
                <div class="mt-3 mb-5">
                    <span class="bg-bip-blue-100 text-bip-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                        {{ $data->getCategory->name }}
                    </span>
                    <span class="bg-bip-orange-100 text-bip-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                        {{ $data->getBrand->name }}
                    </span>
                    {{-- <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                        Mesin Hitung Uang
                    </span> --}}
                    <a href="https://wa.me/6285399999538?text={{ $data->name }}"
                        class="block w-full px-3 py-2 mt-5 text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-brhover:from-bip-orange-400 hover:to-bip-orange-300">
                        Pesan
                    </a>

                    <!--Youtube Iframe-->
                    <div class="h-32 mt-5">
                        <iframe width="fit" height="fit" class="w-full h-full" src="{{ $data->video }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
        <div class="max-w-screen-xl px-16 md:px-32">
            <div>
                {!! $data->description !!}


            </div>

        </div>

        <div class="px-5 lg:px-32">
            <h2 class="text-xl font-semibold">Produk Serupa</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-5 md:gap-12 ">

                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="/images/banking/banking2.webp"
                                alt="">
                        </a>
                        <figcaption class="absolute w-full px-4 py-1 text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-center text-md">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="/images/banking/banking3.webp"
                                alt="">
                        </a>
                        <figcaption class="absolute w-full px-4 py-1 text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-center text-md">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="/images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption class="absolute w-full px-4 py-1 text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-center text-md">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="/images/banking/banking2.webp"
                                alt="">
                        </a>
                        <figcaption class="absolute w-full px-4 py-1 text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-center text-md">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="/images/banking/banking1.webp"
                                alt="">
                        </a>
                        <figcaption class="absolute w-full px-4 py-1 text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-center text-md">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>

    </main>

    <x-footer />

</x-main>
