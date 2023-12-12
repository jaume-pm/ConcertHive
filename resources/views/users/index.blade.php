<x-app-layout>
    
    <a href="{{ route('users.create') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">Add User</a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($users as $user)

                    <div class="p-6 mb-4 bg-white rounded-lg">

                        <div class="flex justify-between items-center">

                            <div>

                                <span class="text-gray-800 text-2xl font-bold">{{ $user->name }}</span>

                            </div>

                        </div>

                        <p class="mt-2 text-xl text-gray-600">Balance: <b>{{ $user->balance }}</b></p>

                        <p class="mt-2 text-lg text-gray-600">Number of concerts: {{ $user->concerts()->count() }}</p>

                        <a href="{{ route('users.show', $user) }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">View User</a>

                    </div>

                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>
