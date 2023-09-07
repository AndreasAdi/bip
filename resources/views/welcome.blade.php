<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/loading.min.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>PT Bismacindo Perkasa</title>
</head>


<div
    class="fixed top-0 bottom-0 left-0 right-0 z-50 h-screen text-3xl text-black align-middle transition-opacity duration-500 ease-in-out bg-white loading animate-fade-in">
    <div class="flex flex-col items-center justify-center w-full h-full">
        <div class="flex justify-center">
            <img src="/images/logobip.webp" alt="" class="w-1/5">
        </div>
        <div class="flex items-center justify-center">
            <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill" />
            </svg>

        </div>
    </div>
</div>

<body>


    <x-navbar />

    <div class="h-[70vh] md:h-screen swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class=" duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                    <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                        <div class="relative items-center gap-6 md:flex lg:grid lg:grid-cols-2">
                            <div>
                                <h1
                                    class="w-full mt-32 text-xl font-bold text-center text-white uppercase md:mt-16 lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                    We provide modern office equipment and furniture & Banking Equipment</h1>
                                <div class="hidden mt-5 md:flex">
                                    <p class="text-base text-white">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis
                                        atque ad sapiente aliquam cupiditate fuga fugiat accusamus totam, et, quaerat
                                        tempora. Sed,
                                        molestias dolore?
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img alt="carousel-1"
                                    class="h-fit w-full mt-5 mb-32 md:mb-8 lg:mt-0 md:w-[40rem] align-middle"
                                    src="images/slide1.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class=" duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                    <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                        <div class="relative items-center gap-6 md:flex lg:grid lg:grid-cols-2">
                            <div>
                                <h1
                                    class="w-full mt-32 text-xl font-bold text-center text-white uppercase md:mt-16 lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                    We provide modern office equipment and furniture & Banking Equipment</h1>
                                <div class="hidden mt-5 md:flex">
                                    <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad
                                        sapiente
                                        aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed,
                                        molestias
                                        dolore?</p>
                                </div>
                            </div>
                            <div>
                                <img alt="carousel-1"
                                    class="h-fit w-full mt-5 mb-32 md:mb-8 lg:mt-0 md:w-[40rem] align-middle"
                                    src="images/slide2.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class=" duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                    <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                        <div class="relative gap-6 lg:grid lg:grid-cols-2">
                            <div>
                                <h1
                                    class="w-full mt-32 text-xl font-bold text-center text-white uppercase md:mt-16 lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                    We provide modern office equipment and furniture & Banking Equipment</h1>
                                <div class="hidden mt-5 md:flex">
                                    <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad
                                        sapiente
                                        aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed,
                                        molestias
                                        dolore?</p>
                                </div>
                            </div><img alt="carousel-1"
                                class="h-fit w-full mt-5 mb-32 md:mb-8 lg:mt-0 md:w-[40rem] align-middle"
                                src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
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
    <div class="hidden px-5 py-20 lg:px-32 bg-bip-blue-950" id="section2">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-orange-400">Produk & Layanan Kami</div>
                <div class="w-full text-3xl font-bold text-center text-white capitalize">Kami siap untuk memenuhi
                    kebutuhan anda
                </div>
                <div class="w-1/5 h-2 rounded-lg bg-gradient-to-tr from-bip-orange-400 to-bip-orange-600"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700 ">

                    <img class="rounded-lg" src="/images/banking.png" alt="" />

                    <a href="/banking"
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 hover:opacity-90 hover:bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white">Banking Equipment</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700">

                    <img class="rounded-lg" src="/images/it.png" alt="" />

                    <a href="/it"
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 hover:opacity-90 hover:bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white ">IT Product</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700">

                    <img class="rounded-lg" src="/images/office.png" alt="" />

                    <a href="/office"
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 hover:opacity-90 hover:bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white ">Office</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700">

                    <img class="rounded-lg" src="/images/machine.png" alt="" />

                    <a href="/machine"
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 hover:opacity-90 hover:bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white ">Machine Tool</h5>
                        </div>
                    </a>
                </div>
                <div
                    class="relative max-w-xs overflow-hidden bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700">

                    <img class="rounded-lg" src="/images/certification.png" alt="" />

                    <a href="/certification"
                        class="absolute inset-0 z-10 transition-opacity duration-300 bg-black opacity-70 hover:opacity-90 hover:bg-gradient-to-tr from-bip-blue-500 to-bip-orange-500">
                        <div class="flex items-center justify-center h-full">
                            <h5 class="text-2xl font-bold text-white ">Certification</h5>
                        </div>
                    </a>
                </div>



                {{-- <div class="max-w-sm bg-white rounded-lg shadow-lg group dark:bg-gray-800 dark:border-gray-700">

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
                </div> --}}

            </div>
        </div>


    </div>
    <div class="px-5 py-20 lg:px-32" id="section3">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-blue-950">Client Kami</div>
                <div class="w-full text-3xl font-bold text-center capitalize">Kami bekerja dengan perusahaan yang luar
                    biasa</div>
                <div class="w-1/5 h-2 rounded-lg bg-bip-blue-950"></div>
            </div>
        </div>

        <div class="flex my-12 marquee3k" data-aos="fade-up">
            <div class="flex flex-wrap items-center content-center justify-center gap-x-16 gap-y-4 " data-speed="2.25"
                data-reverse="true">
                <div class="flex items-center justify-center gap-x-6">

                    <div class="w-48 aspect-h-9">
                        <img class="grayscale hover:grayscale-0" src="images/logo/bri.png" alt="BRI">

                    </div>
                    <div class="w-48 aspect-h-9">
                        <img class=" grayscale hover:grayscale-0" src="images/logo/mandiri2.png" alt="mandiri">

                    </div>
                    <div class="w-48 aspect-h-9">
                        <img class=" grayscale hover:grayscale-0" src="images/logo/btn2.png" alt="btn">

                    </div>
                    <div class="w-48 aspect-h-9">
                        <img class=" grayscale hover:grayscale-0" src="images/logo/bni.png" alt="bni">
                    </div>
                    <div class="w-48 aspect-h-9">
                        <img class="grayscale hover:grayscale-0" src="images/logo/mega.png" alt="mega">

                    </div>
                </div>

            </div>
        </div>


        <div class="flex mt-8 marquee3k" data-reverse="true" data-aos="fade-up">
            <div class="flex flex-wrap items-center content-center justify-center gap-x-16 gap-y-4 "
                data-speed="2.25">

                <div class="flex items-center">
                    <img class="h-16 px-5 py-2 mx-5 grayscale hover:grayscale-0" src="images/logo/permata.png"
                        alt="permata">
                    <img class="h-16 px-5 py-2 mx-5 grayscale hover:grayscale-0" src="images/logo/uob.png"
                        alt="uob">
                    <img class="h-16 px-5 py-2 mx-5 grayscale hover:grayscale-0" src="images/logo/qnb.png"
                        alt="qnb">
                    <img class="h-16 px-5 py-2 mx-5 grayscale hover:grayscale-0" src="images/logo/bca.png"
                        alt="bca">
                    <img class="h-16 px-5 py-2 mx-5 grayscale hover:grayscale-0" src="images/logo/bankdki.png"
                        alt="bank dki">

                </div>

            </div>
        </div>
    </div>

    <div class="grid hidden grid-cols-1 gap-6 px-5 py-10 md:grid-cols-2 md:gap-12 lg:p-32 bg-bip-blue-950"
        id="section4">
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
                    href="/contact">Hubungi kami</a>
            </div>

        </div>
        <div data-aos="fade-up">
            <img src="images/section4.jpg" alt="" class="bg-cover rounded-lg shadow-lg">

        </div>
    </div>

    <div class="px-5 py-20 lg:px-32">
        <div data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-10 space-y-2">
                <div class="text-xl font-bold uppercase text-bip-blue-950">Partner Kami</div>
                <div class="w-full text-3xl font-bold text-center capitalize">Kami bekerja dengan perusahaan yang luar
                    biasa</div>
                <div class="w-1/5 h-2 rounded-lg bg-bip-blue-950"></div>
            </div>
        </div>

        <div class="flex my-12 marquee3k" data-aos="fade-up">
            <div class="flex gap-x-5">
                <!-- Card 1 -->
                <div class="flex gap-4 transition-all ease-in-out">
                    <img src="/images/logo/hp.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/lenovo.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/dell.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/brother.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/benq.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/zyrex.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/asus.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/axioo.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/grgbanking.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                </div>
            </div>
        </div>
        <div class="flex my-12 marquee3k" data-aos="fade-up" data-reverse="true">
            <div class="flex">
                <!-- Card 1 -->
                <div class="flex gap-4 mx-10 transition-all ease-in-out">
                    <img src="/images/logo/dynabook.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/tplink.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/cisco.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/kaspersky.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/chubbsafes.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/lionsafe.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/aws.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/microsoft.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                    <img src="/images/logo/adobe.png" alt="Partner"
                        class="h-20 p-5 bg-white border rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>




    <!--Back To Top Button-->
    <button id="back-to-top-button"
        class="fixed hidden px-4 py-4 text-white transition-transform ease-in-out rounded-full focus:scale-75 bg-bip-orange-500 bottom-4 right-4 hover:bg-orange-600">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 8">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
        </svg>
    </button>

    <x-footer />




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="marquee3k.js"></script>
    <script>
        //make navbar transparent when it is on the top
        const navbar = document.querySelector(".navbar");
        const loading = document.querySelector(".loading");
        const carousel = document.querySelector("#default-carousel");
        const section1 = document.querySelector("#section1");
        const section2 = document.querySelector("#section2");
        const section3 = document.querySelector("#section3");
        const section4 = document.querySelector("#section4");
        const backButton = document.querySelector("#back-to-top-button");

        Marquee3k.init({
            selector: 'marquee3k',
        });


        window.addEventListener("DOMContentLoaded", () => {

            unhide();
            if (window.screen.width < 768) {

                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");
                return;
            }
            const swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        })


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

            if (window.scrollY > 100) {
                backButton.classList.remove("hidden");
            } else {
                backButton.classList.add("hidden");
            }
        });


        function unhide() {
            navbar.classList.remove("hidden");
            // carousel.classList.remove("hidden");
            section1.classList.remove("hidden");
            section2.classList.remove("hidden");
            section3.classList.remove("hidden");
            section4.classList.remove("hidden");

            loading.classList.add("opacity-0");

            //wait for the animation to finish
            setTimeout(() => {
                loading.classList.add("hidden");
            }, 500);

            AOS.init({
                delay: 250,
                once: true

            });


        }
        backButton.addEventListener("click", () => {
            // Scroll to the top of the page smoothly
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
            //remove focus
            backButton.blur();
        });
    </script>

</body>

</html>
