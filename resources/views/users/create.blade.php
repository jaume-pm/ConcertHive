<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Add User</h2>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 p-2 border rounded-md w-full">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 p-2 border rounded-md w-full">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input type="password" name="password" id="password" class="mt-1 p-2 border rounded-md w-full">
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-600">Role</label>
                        <select name="role" id="role" class="mt-1 p-2 border rounded-md w-full">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="artist">Artist</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add User</button>
                    <a href="{{ route('users.index') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
