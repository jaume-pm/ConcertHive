<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $artist->name }}</h2>
                <p class="text-gray-800 text-lg">{{ $artist->bio }}</p>
                <p class="mt-2 text-xl text-gray-600">Country: <b>{{ $artist->country }}</b></p>
                <p class="mt-2 text-lg text-gray-600">Number of concerts: {{ $artist->concerts()->count() }}</p>
                <a href="{{ route('artists.index') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">See All Artists</a>
            </div>
        </div>
        
    </div>
    

</x-app-layout>