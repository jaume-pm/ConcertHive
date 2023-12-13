<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($concerts as $concert)
                    <div class="p-6 mb-4 bg-white rounded-lg">

                        <div class="flex justify-between items-center">

                            <div>

                                <span class="text-gray-800 text-xl">{{ $concert->title }}</span>

                                <p class="mt-2 text-gray-600">Country: {{ $concert->country }}</p>

                                <p class="text-gray-600">City: {{ $concert->city }}</p>

                                <p class="text-gray-600">Date & Time:
                                    {{ \Carbon\Carbon::parse($concert->date_time)->format('j M Y, g:i a') }}</p>

                                <p class="text-gray-600">Artist: {{ $concert->artist_name }}</p>

                            </div>

                        </div>

                        <a href="{{ route('concerts.show', $concert) }}"
                            class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">View Details</a>
                        <!-- In your concert show view (or wherever you want to place the button) -->
                            @if (!$concert->users->contains(auth()->user()))
                            <form action="{{ route('concerts.join', $concert) }}" method="POST">
                                @csrf
                                <button type="submit">Join Concert</button>
                            </form>                            
                            @else
                                <p>You are already attending this concert.</p>
                            @endif

                    </div>
                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>
