<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Slide') }}
        </h2>
    </x-slot>

    <main class="mx-32 mt-5">
        <div class="flex gap-4">
            @foreach ($slides as $item)
                <div>
                    <img class="object-cover w-full h-52" src="{{ asset($item->bg_image) }}" alt="">
                    <div class="flex justify-between">
                        <a href="{{ route('slide.edit', $item->id) }}"
                            class="px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('slide.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 mt-2 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>

    </main>


</x-app-layout>
