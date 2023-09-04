    <div id="default-carousel" class="relative hidden w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-96 md:h-screen">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
                <div class="relative flex flex-row items-center justify-center h-full px-12 lg:px-32">
                    <div class="relative gap-6 lg:grid lg:grid-cols-2">
                        <div class="flex-col items-center justify-center md:flex-row">
                            <div>
                                <h1
                                    class="w-full mt-16 text-xl font-bold text-center text-white uppercase lg:text-5xl lg:text-left lg:mt-5 drop-shadow-xl">
                                    We provide modern office equipment and furniture & Banking Equipment</h1>
                            </div>
                            <div class="hidden mt-5 lg:flex ">
                                <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Iste perferendis ipsa repellat? Excepturi maxime reiciendis atque ad sapiente
                                    aliquam cupiditate fuga fugiat accusamus totam, et, quaerat tempora. Sed, molestias
                                    dolore?</p>
                            </div>
                            <div>
                                <img alt="carousel-1" class="h-32 w-fit mt-5 lg:mt-0 md:w-[40rem] md:h-fit align-middle"
                                    src="https://www.satkomindo.com/assets/image3-bd25cc39.png">
                            </div>
                        </div>
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
            {{-- <div class="hidden duration-700 ease-in-out h-full bg-[url('/public/images/1.png')]" data-carousel-item>
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

            </div> --}}
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
