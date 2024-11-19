@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <!-- Back to product list link -->
    <a href="{{ route('products.index') }}" class="text-gray-500 mb-4 inline-block">&larr; back to list</a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow-lg">
        <!-- Product Image Section -->
        <div class="flex flex-col items-center">
            <div class="bg-gray-100 p-6 rounded-lg mb-4 w-full flex justify-center">
                <!-- Main Product Image -->
                <img id="mainImage" src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-80 max-w-md object-contain">
            </div>

            <!-- Thumbnail Images Section -->
            <div class="flex space-x-2">
                <!-- Loop through product images for small thumbnails -->
                @if($product->image)
                    <img src="{{ asset($product->image) }}" alt="Thumbnail" class="w-20 h-20 object-cover cursor-pointer border border-gray-300 rounded-lg" onclick="changeImage('{{ asset($product->image) }}')">
                @endif
                @if($product->image1)
                    <img src="{{ asset($product->image1) }}" alt="Thumbnail" class="w-20 h-20 object-cover cursor-pointer border border-gray-300 rounded-lg" onclick="changeImage('{{ asset($product->image1) }}')">
                @endif
                @if($product->image2)
                    <img src="{{ asset($product->image2) }}" alt="Thumbnail" class="w-20 h-20 object-cover cursor-pointer border border-gray-300 rounded-lg" onclick="changeImage('{{ asset($product->image2) }}')">
                @endif
                @if($product->image3)
                    <img src="{{ asset($product->image3) }}" alt="Thumbnail" class="w-20 h-20 object-cover cursor-pointer border border-gray-300 rounded-lg" onclick="changeImage('{{ asset($product->image3) }}')">
                @endif
            </div>
        </div>

        <!-- Product Details Section -->
        <div class="flex flex-col">
            <!-- Product Title and Tag (HOTSALE) -->
            <div class="flex items-center mb-4">
                <span class="bg-red-500 text-white px-2 py-1 rounded text-xs">HOTSALE</span>
                <h1 class="text-2xl font-bold ml-3">{{ $product->name }}</h1>
            </div>
            <p class="text-sm text-green-500 mb-4">{{ $product->category }} &middot; 2130 reviews &middot; 9k Sold</p>

            <!-- Product Description -->
            <div class="text-gray-700 text-sm mb-6">
                <p>Description:</p>
                <ul class="list-disc pl-5">
                    <li>Makanan yang lengkap dan seimbang, dengan 4 nutrisi penting.</li>
                    <li>Mengandung antioksidan (Vitamin E dan selenium) untuk sistem kekebalan tubuh yang sehat.</li>
                    <li>Mengandung serat untuk memperlancar pencernaan dan meningkatkan kesehatan usus.</li>
                </ul>
            </div>

            <!-- Size Options -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Size:</label>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 border rounded-md text-gray-700 bg-blue-100">1.5kg</button>
                    <button class="px-4 py-2 border rounded-md text-gray-700">1kg</button>
                    <button class="px-4 py-2 border rounded-md text-gray-700">500g</button>
                    <button class="px-4 py-2 border rounded-md text-gray-700">250g</button>
                </div>
                <p class="text-sm text-gray-500 mt-2">21210 pieces available</p>
            </div>

            <!-- Price Section -->
            <div class="flex items-center mb-6">
                <span class="text-3xl font-bold text-gray-800">${{ number_format($product->price, 2) }}</span>
                <span class="text-gray-400 line-through ml-2">$800.00</span>
            </div>

            <!-- Add to Cart and Buy Now Buttons -->
            <form class="flex items-center space-x-4 mb-4">
                <!-- Quantity Input -->
                <label for="quantity" class="block font-bold text-gray-700">Qty:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-16 border rounded-md text-center">

                <!-- Add to Cart Button -->
                <button type="submit" class="flex-1 px-6 py-3 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700">
                    ADD TO CART
                </button>

                <!-- Buy Now Button -->
                <button type="button" class="flex-1 px-6 py-3 bg-red-600 text-white font-bold rounded-md hover:bg-red-700">
                    BUY NOW
                </button>
            </form>
        </div>
    </div>

   
<!-- Product Reviews Section -->
<div class="mt-10 bg-gray-100 p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Customer Reviews</h2>

    <!-- Display reviews -->
    @foreach($product->reviews as $review)
        <div class="mb-4 border-b pb-4">
            <div class="flex items-center mb-2">
                <!-- Conditional User Avatar Display -->
                @if(auth()->check())
                    <img src="{{ auth()->user()->avatar }}" alt="Profile Image" class="w-8 h-8 rounded-full mr-3">
                @endif

                <!-- Display User Name with Conditional Check -->
                <span class="text-sm font-semibold text-gray-600 mr-2">
                    {{ Auth::id() === $review->user->id ? 'Bạn' : $review->user->name }}
                </span>

                <!-- Display star ratings -->
                <div class="flex text-yellow-500 ml-2">
                    @for($i = 1; $i <= 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $i <= $review->rating ? 'currentColor' : 'none' }}" class="bi bi-star-fill">
                            <path d="M3.612 15.443c-.133 0-.266-.03-.39-.091-.327-.172-.545-.5-.602-.865L2.056 10.9 0 7.916c-.066-.15-.085-.319-.05-.482.035-.163.136-.304.274-.397.136-.093.296-.139.456-.129l3.121.002 1.276-3.724c.145-.428.55-.71.996-.71s.85.282.996.71l1.276 3.724 3.121-.002c.16-.01.32.036.456.129.138.093.239.234.274.397.035.163.016.332-.05.482L13.944 10.9l-.563 3.587c-.057.365-.275.693-.602.865-.133.061-.257.091-.39.091z"/>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Display Comment Date and Time as ISO String -->
            <span class="text-xs text-gray-500 review-date" data-timestamp="{{ $review->created_at->toIso8601String() }}">
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
    const reviewDates = document.querySelectorAll('.review-date');
    reviewDates.forEach(dateElement => {
        const timestamp = dateElement.getAttribute('data-timestamp');
        const localDate = new Date(timestamp).toLocaleString('default', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        dateElement.textContent = localDate;
    });
});

                </script>
            </span>

            <!-- Display Comment Content -->
            <p class="text-gray-700">{{ $review->content }}</p>
        </div>
    @endforeach


    

        <!-- Review Form -->
        <h3 class="text-lg font-semibold mb-2">Leave a Review</h3>
        <form action="{{ route('reviews.store') }}" method="GET" class="mb-6">
            @csrf
            <textarea name="content" placeholder="Viết đánh giá của bạn..." class="w-full p-4 border rounded-md" rows="4"></textarea>
            <div class="flex items-center mt-4">
                <label for="rating" class="mr-4">Đánh giá:</label>
                <select name="rating" class="border rounded-md p-2">
                    <option value="1">1 sao</option>
                    <option value="2">2 sao</option>
                    <option value="3">3 sao</option>
                    <option value="4">4 sao</option>
                    <option value="5">5 sao</option>
                </select>
            </div>
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="mt-4 px-6 py-2 bg-blue-500 text-white font-semibold rounded-full hover:bg-blue-600">Gửi đánh giá</button>
        </form>
        

        
    </div>
</div>

<script>
    // JavaScript function to change the main image when a thumbnail is clicked
    function changeImage(imageUrl) {
        document.getElementById("mainImage").src = imageUrl;
    }
</script>

@endsection
