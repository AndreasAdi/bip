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
    <div class="fixed w-screen bg-white loading screen">
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

            <div class="flex gap-4">
                <div class="max-w-sm bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg " src="/images/banking.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Banking
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
                        <img class="rounded-t-lg" src="/images/it.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">IT
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

        <div class="marquee3k">
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


        <div class="mt-8 marquee3k" data-reverse="true">
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

    <footer class="bg-white dark:bg-gray-900">
        <div class="w-full max-w-screen-xl p-4 py-6 mx-auto lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://bismacindo.co.id" class="flex items-center">
                        <img src="images/logobip.webp" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PT.
                            Bismacindo
                            Perkasa</span>
                    </a>

                    <p class="mt-3 text-gray-500 w-96">
                        Jl. Raya Pesanggrahan 1128 B-C, Puri Kembangan Kel. Kembangan Selatan, Kec. Kembangan Kota
                        Administrasi Jakarta Barat, DKI Jakarta, 11610 Indonesia
                    </p>
                    <div class="mt-2">
                        <div class="flex flex-row mb-2 space-x-2 text-gray-500"><span role="img"
                                aria-label="phone" class="text-xl anticon anticon-phone"><svg viewBox="64 64 896 896"
                                    focusable="false" data-icon="phone" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M885.6 230.2L779.1 123.8a80.83 80.83 0 00-57.3-23.8c-21.7 0-42.1 8.5-57.4 23.8L549.8 238.4a80.83 80.83 0 00-23.8 57.3c0 21.7 8.5 42.1 23.8 57.4l83.8 83.8A393.82 393.82 0 01553.1 553 395.34 395.34 0 01437 633.8L353.2 550a80.83 80.83 0 00-57.3-23.8c-21.7 0-42.1 8.5-57.4 23.8L123.8 664.5a80.89 80.89 0 00-23.8 57.4c0 21.7 8.5 42.1 23.8 57.4l106.3 106.3c24.4 24.5 58.1 38.4 92.7 38.4 7.3 0 14.3-.6 21.2-1.8 134.8-22.2 268.5-93.9 376.4-201.7C828.2 612.8 899.8 479.2 922.3 344c6.8-41.3-6.9-83.8-36.7-113.8z">
                                    </path>
                                </svg></span>
                            <div>(+62)-816872122</div>
                        </div>
                        <div class="flex flex-row items-center space-x-2 text-gray-500"><span role="img"
                                aria-label="mail" class="text-xl anticon anticon-mail"><svg viewBox="64 64 896 896"
                                    focusable="false" data-icon="mail" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-80.8 108.9L531.7 514.4c-7.8 6.1-18.7 6.1-26.5 0L189.6 268.9A7.2 7.2 0 01194 256h648.8a7.2 7.2 0 014.4 12.9z">
                                    </path>
                                </svg></span>
                            <div>budi.pranoto@bismacindo.co.id</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Kantor Cabang
                        </h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://mitramandirimaju.wordpress.com/" class="hover:underline">PT. Mitra
                                    Mandiri Maju</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">PT. Solusi Inti Pratama</a>
                            </li>
                        </ul>

                    </div>
                    {{-- <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href=""
                        class="hover:underline">PT. Bismacindo Perkasa</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="marquee3k.js"></script>

    <script>
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
            Marquee3k.refreshAll();
            console.log(Marquee3k);

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
