<x-main>

    <!-- Flipbook StyleSheet -->
    <link href="css/dflip.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons Stylesheet -->
    <link href="css/themify-icons.min.css" rel="stylesheet" type="text/css" />
    <x-navbar-solid />

    <main class="m-5 " x-data="{
        showModal: false,
        src: 'pdf/1.pdf'
    }">
        <h1 class="mb-10 text-2xl font-semibold text-center">Katalog Digital </h1>

        <div
            class="hidden md:flex items-center  justify-center flex-shrink py-12 bg-[#150f07] rounded-t-md  drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto overflow-hidden">


            <div class="absolute top-0 left-0">
                <div class="flex">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                </div>
            </div>

            <div @click="showModal = true; src = 'pdf/1.pdf'"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm" />
            </div>
            <div @click="showModal = true; src = 'https://online.pubhtml5.com/boilv/beav'"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book" />
            </div>
            <div onclick="openModal('https://online.pubhtml5.com/boilv/dyyd')"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/3.jpg" class="rounded-sm" alt="Book" />
            </div>
            <div onclick="openModal('https://online.pubhtml5.com/boilv/dyyd')"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book" />
            </div>

            <div onclick="openModal('https://online.pubhtml5.com/boilv/dyyd')"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/5.jpg" class="rounded-sm" alt="Book" />
            </div>
        </div>

        <div
            class="hidden md:flex items-center  justify-center flex-shrink py-12 bg-[#362611] rounded-b-md  drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto overflow-hidden">


            <div class="absolute top-0 left-0">
                <div class="flex">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                    <img src="images/bg-middle.webp" class="h-[260px]" alt="">
                </div>
            </div>

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/3.jpg" class="rounded-sm" alt="Book" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book" />
            </a>

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:cursor-pointer hover:-rotate-3 drop-shadow-xl shadow-stone-900 ">

                <img src="images/cover/5.jpg" class="rounded-sm" alt="Book" />
            </a>
        </div>

        {{-- <div
            class="hidden md:flex items-center justify-center flex-shrink py-12 bg-[#362611] rounded-b-md drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out rounded-md shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/3.jpg" class="rounded-sm" alt="Book" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out rounded-md shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book" />
            </a>

            <a href="/"
                class="w-48 transition duration-300 ease-in-out rounded-md shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/5.jpg" class="rounded-sm" alt="Book" />
            </a>

            <div class="absolute bottom-6 -z-10">
                <!--backgroud for book case-->
                <div class="flex justify-center flex-shrink w-full h-full bg-center bg-cover rounded-md shadow-md">

                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                </div>
            </div>
        </div> --}}


        <div
            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book" />
            </a>


            <div class="absolute bottom-6 -z-10">
                <!--backgroud for book case-->
                <div class="flex justify-center flex-shrink w-full h-full bg-center bg-cover rounded-md shadow-md">

                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">

                </div>
            </div>
        </div>

        <div
            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] rounded-b-md drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/3.jpg" alt="Book" class="rounded-sm" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book" />
            </a>


            <div class="absolute bottom-6 -z-10">
                <!--backgroud for book case-->
                <div class="flex justify-center flex-shrink w-full h-full bg-center bg-cover rounded-md shadow-md">

                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">

                </div>
            </div>
        </div>

        <div
            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] rounded-b-md drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">

            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="images/cover/5.jpg" alt="Book" class="rounded-sm" />
            </a>
            <a href="/"
                class="w-48 transition duration-300 ease-in-out shadow-md hover:scale-110 hover:shadow-lg hover:drop-shadow-lg hover:shadow-stone-900 hover:cursor-pointer hover:-rotate-3">

                <img src="" class="rounded-sm" />
            </a>


            <div class="absolute bottom-6 -z-10">
                <!--backgroud for book case-->
                <div class="flex justify-center flex-shrink w-full h-full bg-center bg-cover rounded-md shadow-md">

                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">
                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">

                </div>
            </div>
        </div>


        <!-- Modal -->
        <div>

            <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black opacity-80"
                x-transition>
            </div>
            <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-300"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <!-- Modal content -->
                <div class="z-50 w-screen h-screen p-5 mx-auto bg-white rounded shadow-lg modal-container">
                    <!-- Modal body -->
                    <div class="p-4 modal-body">
                        {{-- <iframe :src="src" seamless='seamless' height="600px" width="1200px"
                            scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true'></iframe> --}}

                        <div x-show="showModal" class="w-screen h-screen _df_book"webgl="true" heigth="500"
                            source="pdf/1.pdf" id="df_manual_book">
                        </div>


                    </div>


                    <!-- Modal footer -->
                    <div class="absolute top-2 right-2">

                        <button @click="showModal = false"
                            class="px-4 py-2 font-bold text-white rounded bg-bip-orange-500 hover:bg-bip-orange-600">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </main>

    {{-- <script>
        function openModal(src) {
            const modal = document.getElementById('modal')

            modal.innerHTML = `<iframe class="w-full h-screen" src='${src}' seamless='seamless'
                scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true'></iframe>`


            modal.classList.remove('hidden')

        }
    </script> --}}

    <script src="js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="js/dflip.min.js" type="text/javascript"></script>
    @livewireScripts()
</x-main>
