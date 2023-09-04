<x-main>
    <x-navbar-solid />

    <main class="p-2 py-8 md:px-32">
        <div class="relative w-full h-48 overflow-hidden rounded-lg shadow-xl md:h-80"><img alt="Company Profile"
                class="absolute inset-0 object-cover w-full h-full" src="/images/company-profile.jpg">
            <div class="absolute inset-0 bg-gray-900/70"></div>
            <div class="relative flex flex-col items-center justify-center h-full gap-2 p-2 text-center">
                <div class="text-4xl font-bold text-white">Company Profile</div>
                <div class="w-1/4 h-2 bg-white rounded-md"></div>
            </div>
        </div>

        {{-- <div class="mt-5 ml-2">
            <a class="px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md md:mr-0"
                href="/">Back</a>

            <!-- Download Button-->
            <a class="px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-bip-blue-500 hover:bg-bip-blue-400 focus:ring-4 focus:outline-none focus:ring-bip-blue-300 text-md md:mr-0"
                href="cp/cp.pdf" download="Company Profile PT Bismacindo">Download</a>

        </div> --}}


        <div class="my-6 md:my-16 ">
            <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
                src="https://heyzine.com/flip-book/46977bdba8.html" style=" width: 100%; height: 100vh;"></iframe>
        </div>

    </main>


    <x-footer />

    {{--

    <iframe style='width:900px;height:500px' src='https://online.pubhtml5.com/boilv/tnct/' seamless='seamless'
        scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true'></iframe> --}}


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</x-main>
