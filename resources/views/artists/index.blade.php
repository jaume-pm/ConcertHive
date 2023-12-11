<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($artists as $artist)

                    <div class="p-6 mb-4 bg-white rounded-lg">

                        <div class="flex justify-between items-center">

                            <div>

                                <span class="text-gray-800 text-xl">{{ $artist->name }}</span>

                            </div>

                        </div>

                        <p class="mt-4 text-md text-gray-900">{{ $artist->bio }}</p>

                        <p class="mt-2 text-lg text-gray-600">{{ $artist->country }}</p>

                    </div>

                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>
