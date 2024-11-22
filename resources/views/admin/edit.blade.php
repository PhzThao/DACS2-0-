@extends('homead')

@section('content')
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Edit Product</h1>

    <!-- Form to edit the product -->
    <div class="bg-white p-8 rounded-lg shadow-xl">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <!-- Form fields similar to create.blade.php but with existing data -->
                <div>
                    <label for="name" class="text-lg font-semibold">Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="description" class="text-lg font-semibold">Description</label>
                    <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded mt-2" required>{{ $product->description }}</textarea>
                </div>
                <div>
                    <label for="price" class="text-lg font-semibold">Price</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="category" class="text-lg font-semibold">Category</label>
                    <input type="text" name="category" id="category" value="{{ $product->category }}" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="brand" class="text-lg font-semibold">Brand</label>
                    <input type="text" name="brand" id="brand" value="{{ $product->brand }}" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="stock" class="text-lg font-semibold">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ $product->stock }}" class="w-full border border-gray-300 p-2 rounded mt-2" required>
                </div>
                <div>
                    <label for="image" class="text-lg font-semibold">Image</label>
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
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
                </div>
            </div>
        </form>
    </div>
@endsection
