@extends('homead')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Add New Product</h1>

    <!-- Form to add a new product -->
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="text-lg font-semibold">Name</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="description" class="text-lg font-semibold">Description</label>
                    <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded mt-2" required></textarea>
                </div>
                <div>
                    <label for="price" class="text-lg font-semibold">Price</label>
                    <input type="number" name="price" id="price" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="category" class="text-lg font-semibold">Category</label>
                    <input type="text" name="category" id="category" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="brand" class="text-lg font-semibold">Brand</label>
                    <input type="text" name="brand" id="brand" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="stock" class="text-lg font-semibold">Stock</label>
                    <input type="number" name="stock" id="stock" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="image" class="text-lg font-semibold">Main Image</label>
                    <input type="file" name="image" id="image" class="w-full border border-gray-300 p-2 rounded mt-2">
                </div>
                <div>
                    <label for="image1" class="text-lg font-semibold">Image 1</label>
                    <input type="file" name="image1" id="image1" class="w-full border border-gray-300 p-2 rounded mt-2">
                </div>
                <div>
                    <label for="image2" class="text-lg font-semibold">Image 2</label>
                    <input type="file" name="image2" id="image2" class="w-full border border-gray-300 p-2 rounded mt-2">
                </div>
                <div>
                    <label for="image3" class="text-lg font-semibold">Image 3</label>
                    <input type="file" name="image3" id="image3" class="w-full border border-gray-300 p-2 rounded mt-2">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Add Product
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
