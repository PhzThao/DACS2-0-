@extends('homead')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Manage Products</h1>

    <!-- Table showing products -->
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">Product List</h2>

        <!-- Button to add a new product -->
        <a href="{{ route('products.create') }}" class="inline-block mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add New Product
        </a>

        <!-- Table to display products -->
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Image</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Category</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Brand</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Price</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Stock</th>
                    <th class="px-6 py-4 text-left text-lg font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-lg text-gray-800">
                @foreach($products as $product)
                    <tr class="hover:bg-gray-50 transition-colors duration-300">
                        <td class="px-6 py-4 border-t">{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                        <td class="px-6 py-4 border-t">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-16 w-16 object-cover rounded">
                        </td> <!-- Hiển thị ảnh sản phẩm -->
                        <td class="px-6 py-4 border-t">{{ $product->name }}</td>
                        <td class="px-6 py-4 border-t">{{ $product->category->name ?? 'N/A' }}</td> <!-- Hiển thị tên category -->
                        <td class="px-6 py-4 border-t">{{ $product->brand->name ?? 'N/A' }}</td>    <!-- Hiển thị tên brand -->
                        <td class="px-6 py-4 border-t">{{ $product->price }}</td>
                        <td class="px-6 py-4 border-t">{{ $product->stock }}</td>
                        <td class="px-6 py-4 border-t">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">
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
            {{ $products->links() }}
        </div>
    </div>

    <!-- JavaScript to confirm delete -->
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this product?');
        }
    </script>
@endsection
