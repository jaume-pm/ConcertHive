<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $user->name }}</h2>
                <p class="text-lg text-gray-800">Email: <b>{{ $user->email }}</b></p>
                <p class="mt-2 text-xl text-gray-600">Role: <b>{{ $user->role }}</b></p>
                <p class="mt-2 text-lg text-gray-600">Balance: ${{ $user->balance }}</p>
                <p class="mt-2 text-lg text-gray-600">Registered at: {{ $user->created_at->format('Y-m-d H:i:s') }}</p>

                {{-- Displaying the number of concerts --}}
                <p class="mt-2 text-lg text-gray-600">Number of Concerts: {{ $user->concerts->count() }}</p>

                <!-- You can also display the fields in a table if you prefer -->
                {{-- <table class="mt-4 w-full">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <!-- Add more rows for other fields -->
                </table> --}}

                <a href="{{ route('users.index') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">See All Users</a>
            </div>
        </div>
        
    </div>

</x-app-layout>
