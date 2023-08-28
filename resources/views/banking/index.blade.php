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
        <div class="px-10 mt-5 ">
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

            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:px-32 lg:py-16">
                <div class="transition-transform ease-in-out hover:scale-105">
                    <figure class="relative">
                        <a href="/banking/1">
                            <img class="h-auto max-w-full p-5 rounded-lg" src="images/banking/banking1.webp"
                                alt="">
                        </a>
                        <figcaption
                            class="absolute w-full px-4 py-1 text-lg text-white rounded-b-lg bottom-6 bg-gray-600/40">
                            <p class="text-xl text-center">Money Counter GRG CM100V</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="transition-transform ease-in-out hover:scale-105">
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
                </div>
            </div>



        </div>

    </main>





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





</body>

</html>
