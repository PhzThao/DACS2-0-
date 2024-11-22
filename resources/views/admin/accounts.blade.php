@extends('homead')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Manage Accounts</h1>

    <!-- Table showing user accounts -->
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">User Accounts</h2>
        
        <!-- Table to display accounts -->
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Email</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-lg text-gray-800">
                @foreach($accounts as $account)
                    <tr class="hover:bg-gray-50 transition-colors duration-300">
                        <!-- Display the ID starting from 1 -->
                        <td class="px-6 py-4 border-t">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-t">{{ $account->name }}</td>
                        <td class="px-6 py-4 border-t">{{ $account->email }}</td>
                        <td class="px-6 py-4 border-t">
                            <div class="flex items-center space-x-4">
                                
                                <!-- Delete Button with Icon -->
                                <form action="{{ route('accounts.delete', $account->id) }}" method="POST" class="inline ml-2" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 text-lg font-semibold">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $accounts->links() }}
        </div>
    </div>

    <!-- JavaScript to confirm delete -->
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this account?');
        }
    </script>
@endsection
    