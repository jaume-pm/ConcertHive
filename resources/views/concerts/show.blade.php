<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 mb-4 bg-white rounded-lg">

                        <div class="flex justify-between items-center">

                            <div>

                                <span class="text-gray-800 text-xl">{{ $concert->title }}</span>
                                
                                <p class="mt-2 text-gray-600">Country: {{ $concert->country }}</p>
                                
                                <p class="text-gray-600">City: {{ $concert->city }}</p>
                                
                                <p class="text-gray-600">Date & Time: {{ \Carbon\Carbon::parse($concert->date_time)->format('j M Y, g:i a') }}</p>
                                
                                <p class="text-gray-600">Artist: {{ $concert->artist_name }}</p>
                                
                                <p class="text-gray-600">Ticket Price: ${{ $concert->ticket_price }}</p>
                                
                                <p class="text-gray-600">Max Capacity: {{ $concert->max_capacity }}</p>
                                
                                <p class="text-gray-600">Venue: {{ $concert->venue }}</p>

                            </div>

                        </div>

                        <a href="{{ route('concerts.show', $concert) }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">View Details</a>

                    </div>

            </div>
        </div>
    </div>

</x-app-layout>
