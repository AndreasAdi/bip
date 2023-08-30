<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>PT Bismacindo Perkasa</title>
</head>

<body>
    <x-navbar-solid />

    <main>
        <div class="mt-5 md:px-10 ">
            <h1 class="mt-5 mb-3 text-2xl font-semibold text-center">Banking Equipment</h1>
            <div class="w-1/5 h-2 mx-auto rounded-lg s bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            <div class="flex w-full mt-5 lg:px-32">
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

            <div class="gap-2 md:flex lg:px-32 lg:py-16">
                @foreach ($data as $item)
                    <div class="transition-transform ease-in-out border md:w-4/12 hover:scale-105">
                        <figure class="relative">
                            <a href="banking/{{ $item->id }}">
                                <img class="h-auto max-w-full p-5 rounded-lg" src="{{ $images[$loop->index][1] }}"
                                    alt="">
                            </a>
                            <figcaption
                                class="absolute bottom-0 w-full px-4 py-1 text-white rounded-b-lg bg-gray-600/80">
                                <p class="text-center  text-ellipsis">{{ $item->name }}</p>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach

                {{-- <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking2.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter GRG CM200V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking3.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G100</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking5.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">CMICO VACUUM TYPE CCM-868 Floor</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking6.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">CMICO VACUUM TYPE CCM-868 Dekstop</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking7.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Branch Cash Recycler GRG P5800</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking8.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Branch Cash Recycler GRG TCR71</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G110</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G110</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G110</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G110</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="#">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking4.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter IBD G110</p>
                        </figcaption>
                    </figure>
                </div> --}}
            </div>



        </div>

    </main>





    <x-footer />


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>





</body>

</html>
