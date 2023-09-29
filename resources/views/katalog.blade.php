<x-main class="bg">
    <script src='//pubhtml5.com/plugin/LightBox/js/pubhtml5-light-box-api-min.js'></script>
    <style>
        .bg {
            background-color: #ffffff;
            background-image: url(
            "data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%239C92AC' fill-opacity='0.21' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
    </style>

    <x-navbar-solid/>

    <main class="flex h-screen flex-col items-center justify-center bg" x-data="{
        showModal: false,
        src: 'pdf/1.pdf'
    }">

        <h1 class="mb-5 px-5 py-3 text-3xl font-bold text-white bg-bip-orange-500">KATALOG DIGITAL</h1>
        <div
            class="mx-auto  flex max-w-6xl flex-wrap items-center justify-center gap-5 gap-x-12 overflow-hidden rounded-t-md bg-white p-12 drop-shadow-2xl group md:flex-nowrap">

            {{--            <div class="absolute top-0 left-0">--}}
            {{--                <div class="flex">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                    <img src="images/bg-middle.webp" class="h-[100vh]" alt="">--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div
                data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/dyyd/' data-width='1200'
                data-height='700' data-title='Company Profile'
                class="w-48 shadow-md shadow-stone-900 drop-shadow-xl transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm"/>
            </div>
            <div
                data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/beav' data-width='1200'
                data-height='700' data-title='Katalog Bank Equipment'
                class="w-48 shadow-md shadow-stone-900 drop-shadow-xl transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book"/>
            </div>
            <div
                data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/tqaj/' data-width='1200'
                data-height='700' data-title='Katalog IT Equipment'
                class="w-48 shadow-md shadow-stone-900 drop-shadow-xl transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="images/cover/3.jpg" class="rounded-sm" alt="Book"/>
            </div>
            <div
                data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/yplp/' data-width='1200'
                data-height='700' data-title='Katalog Office Equipment'
                class="w-48 shadow-md shadow-stone-900 drop-shadow-xl transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book"/>
            </div>

            <div
                data-rel='fh5-light-box-demo' data-href='https://online.pubhtml5.com/boilv/wvdy/' data-width='1200'
                data-height='700' data-title='Katalog Medical Equipment'
                class="w-48 shadow-md shadow-stone-900 drop-shadow-xl transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer">
                <img src="images/cover/5.jpg" class="rounded-sm" alt="Book"/>
            </div>
        </div>

        {{--        <div--}}
        {{--            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">--}}

        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="images/cover/1.jpg" alt="Book" class="rounded-sm"/>--}}
        {{--            </a>--}}
        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="images/cover/2.jpg" class="rounded-sm" alt="Book"/>--}}
        {{--            </a>--}}


        {{--            <div class="absolute bottom-6 -z-10">--}}
        {{--                <!--backgroud for book case-->--}}
        {{--                <div class="flex h-full w-full flex-shrink justify-center rounded-md bg-cover bg-center shadow-md">--}}

        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}
        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div--}}
        {{--            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] rounded-b-md drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">--}}

        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="images/cover/3.jpg" alt="Book" class="rounded-sm"/>--}}
        {{--            </a>--}}
        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="images/cover/4.jpg" class="rounded-sm" alt="Book"/>--}}
        {{--            </a>--}}


        {{--            <div class="absolute bottom-6 -z-10">--}}
        {{--                <!--backgroud for book case-->--}}
        {{--                <div class="flex h-full w-full flex-shrink justify-center rounded-md bg-cover bg-center shadow-md">--}}

        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}
        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div--}}
        {{--            class="flex md:hidden items-center justify-center flex-shrink py-12 bg-[#362611] rounded-b-md drop-shadow-md gap-x-12 group max-w-4xl px-6 mx-auto">--}}

        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="images/cover/5.jpg" alt="Book" class="rounded-sm"/>--}}
        {{--            </a>--}}
        {{--            <a href="/"--}}
        {{--               class="w-48 shadow-md transition duration-300 ease-in-out hover:-rotate-3 hover:scale-110 hover:cursor-pointer hover:shadow-lg hover:shadow-stone-900 hover:drop-shadow-lg">--}}

        {{--                <img src="" class="rounded-sm"/>--}}
        {{--            </a>--}}


        {{--            <div class="absolute bottom-6 -z-10">--}}
        {{--                <!--backgroud for book case-->--}}
        {{--                <div class="flex h-full w-full flex-shrink justify-center rounded-md bg-cover bg-center shadow-md">--}}

        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}
        {{--                    <img src="images/bg-middle.webp" class="w-[100em] h-[50px]" alt="">--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}


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
                <div class="z-50 mx-auto h-screen w-screen rounded bg-white p-5 shadow-lg modal-container">
                    <!-- Modal body -->
                    <div class="p-4 modal-body">
                        <iframe :src="src" seamless='seamless' height="600px" width="1200px"
                                scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true'></iframe>

                        {{--                        <div x-show="showModal" class="h-screen w-screen _df_book" webgl="true" heigth="500"--}}
                        {{--                             source="pdf/1.pdf" id="df_manual_book">--}}
                        {{--                        </div>--}}


                    </div>


                    <!-- Modal footer -->
                    <div class="absolute top-2 right-2">

                        <button @click="showModal = false"
                                class="rounded px-4 py-2 font-bold text-white bg-bip-orange-500 hover:bg-bip-orange-600">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </main>

    {{-- <script>
        function openModal(src) {
            const modal = document.getElementById('modal')

            modal.innerHTML = `<iframe class="h-screen w-full" src='${src}' seamless='seamless'
                scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true'></iframe>`


            modal.classList.remove('hidden')

        }
    </script> --}}

    <script src="js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="js/dflip.min.js" type="text/javascript"></script>
    @livewireScripts()
</x-main>
