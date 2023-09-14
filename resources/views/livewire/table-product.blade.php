<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <a href="{{ route('product.insert') }}"
                class="inline-flex items-center px-3 py-2 mb-3 text-sm font-medium text-white border border-transparent rounded-lg bg-bip-blue-600 focus:outline-none hover:bg-bip-blue-700 focus:ring-4 focus:ring-bip-blue-500 dark:bg-bip-blue-600 dark:hover:bg-bip-blue-700 dark:focus:ring-bip-blue-500 dark:focus:border-bip-blue-500">
                <svg class="w-4 h-4 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 1v16M1 9h16" />
                </svg>
                Add
                Product</a>
            <div class="mt-5 text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between pb-4">
                    <div>
                        <div>
                            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <svg class="w-3 h-3 text-gray-500 mr-2.5 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg>
                                Katergori
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownRadio"
                                class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownRadioButton">

                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio0" type="radio" value=""
                                                wire:model.live="filterCategory" name="filter-radio"
                                                class="w-4 h-4 bg-gray-100 border-gray-300 text-bip-blue-600 focus:ring-bip-blue-500 dark:focus:ring-bip-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio0"
                                                class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Semua</label>

                                        </div>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio{{ $loop->index + 1 }}" type="radio"
                                                    value="{{ $loop->index + 1 }}" wire:model.live="filterCategory"
                                                    name="filter-radio"
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 text-bip-blue-600 focus:ring-bip-blue-500 dark:focus:ring-bip-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio{{ $loop->index + 1 }}"
                                                    class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $category->name }}</label>

                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>


                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <input type="text" id="search" wire:model.live='search' name="search"
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-bip-blue-500 focus:border-bip-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-bip-blue-500 dark:focus:border-bip-blue-500"
                            placeholder="Search for items">
                    </div>


                </div>
                <div class="relative p-5 overflow-x-auto bg-white border rounded-lg">


                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Brand
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sub Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody id="table-body">

                            <tr wire:loading.delay.long>
                                <td colspan="5">
                                    Loading...
                                </td>
                            </tr>

                            @if ($product->isEmpty())
                                <tr class="text-xl text-center bg-white ">
                                    <td colspan="5" class="py-5">
                                        <div class="flex justify-center gap-5">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-frown">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                                                    <line x1="9" y1="9" x2="9.01"
                                                        y2="9"></line>
                                                    <line x1="15" y1="9" x2="15.01"
                                                        y2="9"></line>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            Produk Tidak Ditemukan
                                        </div>

                                    </td>
                                </tr>
                            @endif

                            @foreach ($product as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    {{-- <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-bip-blue-600 focus:ring-bip-blue-500 dark:focus:ring-bip-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td> --}}
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->getBrand->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->getCategory->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($item->getListSubCategoryNames() != null)
                                            @foreach ($item->getListSubCategoryNames() as $sub)
                                                <span
                                                    class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full">{{ $sub }}</span>
                                            @endforeach
                                        @else
                                            <span
                                                class="px-2 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full">Tidak
                                                ada</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium">
                                        <a href="/admin/product/edit/{{ $item->id }}"
                                            class="pr-2 text-bip-blue-600 hover:text-bip-blue-500">Edit</a>
                                        <button onclick="deleteProduct({{ $item->id }})"
                                            class="text-red-600 hover:text-red-500">Delete</button>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>

                <div class="mt-3">
                    {{ $product->onEachSide(1)->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
</div>
