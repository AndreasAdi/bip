<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="">
                <a href="{{ route('brand.insert') }}"
                    class="inline-flex items-center px-3 py-2 mb-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <svg class="w-4 h-4 mr-2 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                    Add
                    Brand</a>
                <div class="mt-5 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between pb-4">
                        <div>
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    {{-- <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 mr-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                        </svg> --}}
                                    Katergori
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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
                                                <input id="filter-radio-0" type="radio" value=""
                                                    wire:model.live="filterCategory" name="filter-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-0"
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
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <input type="text" id="search" wire:model.live='search' name="search"
                                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>


                    </div>
                    <div class="relative p-5 overflow-x-auto bg-white border sm:rounded-lg">


                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>

                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kategori
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody id="table-body">

                                <tr wire:loading.delay.long>
                                    <td colspan="4">
                                        Loading...
                                    </td>
                                </tr>

                                @if ($brand->isEmpty())
                                    <tr class="text-xl text-center bg-white ">
                                        <td colspan="4" class="py-5">
                                            <div class="flex justify-center gap-5">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                        height="48" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-frown">
                                                        <circle cx="12" cy="12" r="10">
                                                        </circle>
                                                        <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                                                        <line x1="9" y1="9" x2="9.01"
                                                            y2="9"></line>
                                                        <line x1="15" y1="9" x2="15.01"
                                                            y2="9"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div>
                                                Brand Tidak Ditemukan
                                            </div>

                                        </td>
                                    </tr>
                                @endif

                                @foreach ($brand as $item)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        {{-- <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td> --}}
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->name }}
                                        </th>

                                        <td class="px-6 py-4">
                                            @foreach ($item->getListCategoryNames() as $categoryNames)
                                                <span class="px-2 py-1 font-semibold leading-tight">
                                                    {{ $categoryNames }}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium">
                                            <a href="/admin/brand/edit/{{ $item->id }}"
                                                class="pr-2 text-blue-600 hover:text-blue-500">Edit</a>
                                            <button onclick="deleteBrand({{ $item->id }})"
                                                class="text-red-600 hover:text-red-500">Delete</button>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>


                    </div>

                    <div class="mt-3">
                        {{ $brand->onEachSide(1)->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
