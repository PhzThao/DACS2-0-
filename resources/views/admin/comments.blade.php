@extends('homead')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Manage Reviews</h1>

    <!-- Table showing reviews -->
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">Review List</h2>


        <!-- Table to display reviews -->
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Content</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Rating</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Product</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">User</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-lg text-gray-800">
                @foreach($reviews as $review)
                    <tr class="hover:bg-gray-50 transition-colors duration-300">
                        <td class="px-6 py-4 border-t">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-t">{!! $review->content !!}</td>
                        <td class="px-6 py-4 border-t">{{ $review->rating }}</td>
                        <td class="px-6 py-4 border-t">{{ $review->product->name }}</td>
                        <td class="px-6 py-4 border-t">{{ $review->user->name }}</td>
                        <td class="px-6 py-4 border-t">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $reviews->links() }}
        </div>
    </div>

    <!-- JavaScript to confirm delete -->
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this review?');
        }
    </script>
@endsection
