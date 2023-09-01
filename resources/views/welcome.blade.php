<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>PT Bismacindo Perkasa</title>
</head>

<body>
    <div class="fixed w-screen bg-white md:bg-transparent loading screen">
        <div class="flex text-3xl text-black animate-fade-in">
            <div class="mx-auto my-auto">
                <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

    <x-navbar />
    {{-- <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div> --}}
    <div id="default-carousel" class="relative hidden w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-96 md:h-screen">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                    <div class="relative gap-6 lg:grid lg:grid-cols-2">
                        <div>
                            <h1
                                class="w-full mt-16 text-2xl font-bold text-center text-white uppercase lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                We provide modern office equipment and furniture & Banking Equipment</h1>
                            <div class="hidden mt-5 lg:flex lg:block">
                                <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad sapiente
                                    aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed, molestias
                                    dolore?</p>
                            </div>
                        </div><img alt="carousel-1" class="h-fit w-full mt-5 lg:mt-0 md:w-[40rem] align-middle"
                            src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                    </div>
                </div>

            </div>
            <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                    <div class="relative gap-6 lg:grid lg:grid-cols-2">
                        <div>
                            <h1
                                class="w-full mt-16 text-2xl font-bold text-center text-white uppercase lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                We provide modern office equipment and furniture & Banking Equipment</h1>
                            <div class="hidden mt-5 lg:flex">
                                <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad sapiente
                                    aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed, molestias
                                    dolore?</p>
                            </div>
                        </div><img alt="carousel-1" class="h-fit w-full mt-5 lg:mt-0 md:w-[40rem] align-middle"
                            src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                    </div>
                </div>

            </div>

            {{-- <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                    <div class="relative gap-6 lg:grid lg:grid-cols-2">
                        <div>
                            <h1
                                class="w-full mt-4 text-2xl font-bold text-center text-white uppercase lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                Layanan kami sudah tersebar dari Sabang hingga Merauke</h1>
                            <div class="mt-5 lg:flex">
                                <p class="text-base text-white">Demi menguhubungkan orang-orang tercinta yang
                                    berada di beberapa kepulauan Indonesia, kami memberikan layanan telekomunikasi
                                    di beberapa titik yang tersebar di wilayah Indonesia.</p>
                            </div>
                        </div><img alt="carousel-1" class="h-full w-[12rem] md:w-[40rem]"
                            src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                    </div>
                </div>

            </div>
            --}}
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                    <div class="relative gap-6 lg:grid lg:grid-cols-2">
                        <div>
                            <h1
                                class="w-full mt-4 text-2xl font-bold text-center text-white uppercase lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                We provide modern office equipment and furniture & Banking Equipment</h1>
                            <div class="mt-5 lg:flex">
                                <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad sapiente
                                    aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed, molestias
                                    dolore?</p>
                            </div>
                        </div><img alt="carousel-1" class="h-full w-[12rem] md:w-[40rem]"
                            src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                    </div>
                </div>

            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            {{--
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button> --}}
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="grid hidden grid-cols-1 gap-6 px-5 py-10 bg-white md:grid-cols-2 md:gap-12 lg:p-32" id="section1">

        <div data-aos="fade-up-right">
            <div class="text-xl font-bold uppercase text-bip-blue-950">Tentang Bismacindo</div>
            <div class="mt-3 text-3xl font-extrabold text-black capitalize">20 Tahun Pengalaman Dalam Bidang Banking
                Equipment
            </div>
            <div class="w-1/6 h-2 mt-2 mb-5 rounded-md bg-bip-blue-950"></div>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem dolorum a, molestias maiores quam
                ipsum in
                eaque quia explicabo ex, esse ab, mollitia dolores magni fugit commodi voluptate ducimus tempora
                adipisci
                labore nesciunt porro laboriosam. Adipisci soluta necessitatibus suscipit fuga distinctio dolorem vel
                possimus, ratione delectus. Minus repudiandae repellat hic?
            </p>
        </div>

        <div data-aos="fade-up">
            <img src="images/section2.jpeg" alt="" class="bg-cover rounded-lg shadow-lg">

        </div>
    </div>
    <div class="px-5 py-20 lg:px-32 bg-bip-blue-950">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-orange-400">Produk & Layanan Kami</div>
                <div class="w-full text-3xl font-bold text-center text-white capitalize">Kami siap untuk memenuhi
                    kebutuhan anda
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            </div>

            <div class="flex flex-wrap gap-4">
                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg " src="/images/banking.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/banking">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Banking
                                Equipment</h5>
                        </a>

                        <a href="/banking"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Produk
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="/it">
                        <img class="rounded-t-lg" src="/images/it.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">IT
                                Equipment</h5>
                        </a>

                        <a href="/it"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Produk
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/office.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Office
                                Equipment</h5>
                        </a>

                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Produk
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/machine.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Machine
                                Tool</h5>
                        </a>

                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Produk
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/certification.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Certification
                            </h5>
                        </a>

                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Produk
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div class="px-5 py-20 lg:px-32 ">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-blue-950">Client Kami</div>
                <div class="w-full text-3xl font-bold text-center capitalize">Kami bekerja dengan perusahaan yang luar
                    biasa</div>
                <div class="w-1/5 h-2 rounded-lg bg-bip-blue-950"></div>
            </div>
        </div>

        <div class="flex marquee3k" data-aos="fade-up">
            <div class="flex flex-wrap items-center content-center justify-center gap-x-16 gap-y-4 " data-speed="2.25"
                data-reverse="true">
                <div class="flex items-center">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/bri.png" alt="BRI">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/mandiri2.png" alt="mandiri">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/btn2.png" alt="btn">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/bni.png" alt="bni">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/mega.png" alt="mega">
                    {{-- <img class="h-16" src="images/logo/permata.png" alt="permata">
                    <img class="h-16" src="images/logo/uob.png" alt="uob">
                    <img class="h-16" src="images/logo/qnb.png" alt="qnb">
                    <img class="h-16" src="images/logo/bca.png" alt="bca">
                    <img class="h-16" src="images/logo/bankdki.png" alt="bank dki"> --}}

                </div>

            </div>
        </div>


        <div class="flex mt-8 marquee3k" data-reverse="true" data-aos="fade-up">
            <div class="flex flex-wrap items-center content-center justify-center gap-x-16 gap-y-4 "
                data-speed="2.25">

                <div class="flex items-center">
                    {{-- <img class="h-16" src="images/logo/bri.png" alt="BRI">
                    <img class="h-16" src="images/logo/mandiri2.png" alt="mandiri">
                    <img class="h-16" src="images/logo/btn2.png" alt="btn">
                    <img class="h-16" src="images/logo/bni.png" alt="bni">
                    <img class="h-16" src="images/logo/mega.png" alt="mega"> --}}
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/permata.png" alt="permata">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/uob.png" alt="uob">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/qnb.png" alt="qnb">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/bca.png" alt="bca">
                    <img class="h-16 grayscale hover:grayscale-0" src="images/logo/bankdki.png" alt="bank dki">

                </div>

            </div>
        </div>
    </div>





    <div class="grid grid-cols-1 gap-6 px-5 py-10 md:grid-cols-2 md:gap-12 lg:p-32 bg-bip-blue-950">
        <div data-aos="fade-up-right">
            <div class="mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-orange-400">Hubungi Kami</div>
                <div class="w-full text-3xl font-bold text-white capitalize">Mari Bekerja Sama Dengan Kami
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            </div>
            <div>
                <div class="mt-5 mb-6 text-lg text-white">Apakah anda tertarik jika berbisnis dengan
                    kami atau membutuhkan Banking Equipment, IT Product atau Office Equipment untuk perusahaan atau
                    organisasi anda? jangan ragu untuk menghubungi kami</div><a
                    class="px-8 py-3 text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 hover:text-white"
                    href="/help">Hubungi kami</a>
            </div>

        </div>
        <div data-aos="fade-up">
            <img src="images/section4.jpg" alt="" class="bg-cover rounded-lg shadow-lg">

        </div>
    </div>

    <x-footer />



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="marquee3k.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        //make navbar transparent when it is on the top
        const navbar = document.querySelector(".navbar");
        const loading = document.querySelector(".loading");
        const carousel = document.querySelector("#default-carousel");
        const section1 = document.querySelector("#section1");

        Marquee3k.init({
            selector: 'marquee3k',
        });
        //document ready
        window.addEventListener("load", () => {
            if (window.screen.width < 768) {
                console.log("mobile");
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");
                return;
            }
        });


        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 0 || window.screen.width < 768) {
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");
                navbar.classList.add("shadow-lg");

            } else if (window.pageYOffset == 0 && window.innerWidth > 768) {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white");
                navbar.classList.remove("text-base-900");
                navbar.classList.add("text-white")
                navbar.classList.remove("shadow-lg");
            }
        });

        window.setTimeout(unhide, 500);

        function unhide() {
            navbar.classList.remove("hidden");
            carousel.classList.remove("hidden");
            section1.classList.remove("hidden");
            loading.classList.add("hidden");
            AOS.init({
                delay: 350,

            });
        }
    </script>

</body>

</html>
