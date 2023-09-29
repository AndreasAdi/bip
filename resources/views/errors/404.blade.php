<x-main>
    <div class="min-h-screen flex items-center justify-center bg-gray-950">
        <div class=" rounded overflow-hidden p-6 bg-gray-950">
            <div class="flex items-center justify-center">
                <img class="h-64 w-64  rounded-md" src="{{asset("images/404.png")}}" alt="Broken robot">
            </div>
            <div class="px-6 py-4 text-center">
                <h1 class="font-bold text-2xl mb-2 text-white font-mono">Error 404</h1>
                <p class="text-white font-mono">
                    Halaman yang anda cari tidak ditemukan.
                </p>
                <div class="mt-10">
                    <a href="/"
                       class="bg-bip-blue-500 hover:bg-bip-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-main>
