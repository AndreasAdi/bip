    <nav class="fixed top-0 left-0 z-40 hidden w-full text-white bg-transparent navbar dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto ">
            <a href="#" class="flex items-center">
                <img src="/images/logobip.webp" class="h-8 mr-3" alt="Flowbite Logo" />

                <span class="self-center text-2xl font-semibold whitespace-nowrap">Bismacindo
                </span>
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="hidden px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md md:mr-0 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 md:block">Karir</button>
                <a href="/contact"
                    class="hidden px-6 py-2 ml-3 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-blue-500 to-bip-blue-700 hover:bg-gradient-to-br hover:from-bip-blue-400 hover:to-bip-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 text-md md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:block">Hubungi
                    Kami</a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bip-orange-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Perusahaan
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar1"
                            class="z-50 hidden w-screen font-normal bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 md:w-44">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/profile"
                                        class="block w-full px-12 py-2 md:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white md:w-fit">Tentang
                                        Perusahan</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="block w-full px-12 py-2 md:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white md:w-fit">Manajemen</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block w-full px-12 py-2 md:px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white md:w-fit">Penghargaan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bip-orange-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Produk
                            & Layanan
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/banking"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Banking
                                        Equipment</a>
                                </li>
                                <li>
                                    <a href="/it"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">IT
                                        Product</a>
                                </li>
                                <li>
                                    <a href="/office"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Office
                                        Equipment</a>
                                </li>
                                <li>
                                    <a href="/machine"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Machine Tools</a>
                                </li>
                                <li>
                                    <a href="/certification"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Certification</a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bip-orange-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Bantuan</a>
                    </li>
                </ul>
                <button type="button"
                    class="w-full px-6 py-2 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md md:mr-0 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 md:hidden">Karir</button>

                <button type="button"
                    class="w-full px-6 py-2 mt-3 font-bold text-center text-white bg-blue-600 rounded-full hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 text-md md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:hidden">Contact</button>
            </div>

        </div>

    </nav>
