@extends('layouts.app')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>   
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
                @foreach([$product->image, $product->image1, $product->image2, $product->image3] as $image)
                    @if($image)
                        <img src="{{ asset($image) }}" alt="Thumbnail" class="w-20 h-20 object-cover cursor-pointer border border-gray-300 rounded-lg thumbnail" data-src="{{ asset($image) }}">
                    @endif
                @endforeach
            </div>                
        </div>

        <!-- Product Details Section -->
        <div class="flex flex-col">
            <!-- Product Title and Tag (HOTSALE) -->
            <div class="flex items-center mb-4">
                <span class="bg-red-500 text-white px-2 py-1 rounded text-xs">HOTSALE</span>
                <h1 class="text-2xl font-bold ml-3">{{ $product->name }}</h1>
            </div>
            <p class="text-sm text-green-500 mb-4"> &middot; 2130 reviews &middot; 9k Sold</p>

            <!-- Product Description -->
            <div class="text-gray-700 text-sm mb-6">
                <p>Description:</p>
                <ul class="list-disc pl-5">
                    <li>{{ $product->description }}</li> <!-- Hiển thị mô tả -->
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
                <span class="text-3xl font-bold text-gray-800">${{ number_format($product->price, 2) }}</span> <!-- Hiển thị giá -->
                <span class="text-gray-400 line-through ml-2">${{ number_format($product->price * 2, 2) }}</span>
            </div>

            <!-- Add to Cart and Buy Now Buttons -->
            <form action="{{ route('cart.add') }}" method="POST" class="flex items-center space-x-4 mb-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="product_name" value="{{ $product->name }}">
                <input type="hidden" name="product_price" value="{{ $product->price }}">
                <input type="hidden" name="product_image" value="{{ $product->image }}">
            
                <label for="quantity" class="block font-bold text-gray-700">Qty:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-16 border rounded-md text-center">
            
                <button type="submit" class="flex-1 px-6 py-3 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700">
                    ADD TO CART
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
                    <span class="text-sm font   -semibold text-gray-600 mr-2">
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
                <p class="text-gray-700">{!! $review->content !!}</p>

            </div>
        @endforeach


        

            <!-- Review Form -->
            <h3 class="text-lg font-semibold mb-2">Leave a Review</h3>
            <form action="{{ route('reviews.store') }}" method="POST" class="mb-6">
                @csrf
                <textarea name="content" id="review-content" placeholder="Viết đánh giá của bạn..." class="w-full p-4 border rounded-md" rows="4"></textarea>
                <div class="flex items-center mt-4">
                    <label for="rating" class="mr-4">Đánh giá:</label>
                    <div id="rating-stars" class="flex cursor-pointer">
                        <!-- Các sao có data-value từ 1 đến 5 -->
                        <svg class="star w-8 h-8 text-gray-300 hover:text-yellow-500 transition-colors duration-200" data-value="1" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path class="fill-current" d="M12 17.27l-6.18 3.73 1.64-7.03-5.51-4.73 7.19-.61L12 2l3.86 7.02 7.19.61-5.51 4.73 1.64 7.03L12 17.27z"></path>
                        </svg>
                        <svg class="star w-8 h-8 text-gray-300 hover:text-yellow-500 transition-colors duration-200" data-value="2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path class="fill-current" d="M12 17.27l-6.18 3.73 1.64-7.03-5.51-4.73 7.19-.61L12 2l3.86 7.02 7.19.61-5.51 4.73 1.64 7.03L12 17.27z"></path>
                        </svg>
                        <svg class="star w-8 h-8 text-gray-300 hover:text-yellow-500 transition-colors duration-200" data-value="3" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path class="fill-current" d="M12 17.27l-6.18 3.73 1.64-7.03-5.51-4.73 7.19-.61L12 2l3.86 7.02 7.19.61-5.51 4.73 1.64 7.03L12 17.27z"></path>
                        </svg>
                        <svg class="star w-8 h-8 text-gray-300 hover:text-yellow-500 transition-colors duration-200" data-value="4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path class="fill-current" d="M12 17.27l-6.18 3.73 1.64-7.03-5.51-4.73 7.19-.61L12 2l3.86 7.02 7.19.61-5.51 4.73 1.64 7.03L12 17.27z"></path>
                        </svg>
                        <svg class="star w-8 h-8 text-gray-300 hover:text-yellow-500 transition-colors duration-200" data-value="5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path class="fill-current" d="M12 17.27l-6.18 3.73 1.64-7.03-5.51-4.73 7.19-.61L12 2l3.86 7.02 7.19.61-5.51 4.73 1.64 7.03L12 17.27z"></path>
                        </svg>
                    </div>          
                </div>
                
                <!-- Input ẩn để gửi rating -->
                <input type="hidden" name="rating" id="rating-input">
                    
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="flex space-x-4 mt-4">
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">Submit Review</button>
                </div>
            </form>
            

            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const imageUrl = this.getAttribute('data-src');
                    changeImage(imageUrl);
                });
            });
        });
        
        function changeImage(imageUrl) {
            console.log("Changing image to:", imageUrl);
            const mainImage = document.getElementById("mainImage");
            if (mainImage) {
                mainImage.src = imageUrl;
                console.log("Image changed successfully");
            } else {
                console.error("Main image element not found!");
            }
        }



        document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('#rating-stars .star');
        const ratingInput = document.getElementById('rating-input');
        
        // Lắng nghe sự kiện click vào từng sao
        stars.forEach(star => {
            star.addEventListener('click', function () {
                // Xử lý chọn sao (lấy giá trị của sao được click)
                const rating = star.getAttribute('data-value');
                
                // Cập nhật sao đã chọn
                updateStars(rating);

                // Lưu giá trị rating vào input hidden
                ratingInput.value = rating;
            });
        });

        // Cập nhật màu sắc sao khi click
        function updateStars(rating) {
            stars.forEach(star => {
                const starValue = star.getAttribute('data-value');
                if (starValue <= rating) {
                    star.classList.remove('text-gray-300');
                    star.classList.add('text-yellow-500');
                } else {
                    star.classList.remove('text-yellow-500');
                    star.classList.add('text-gray-300');
                }
            });
        }
    });





    document.addEventListener("DOMContentLoaded", function() {
    ClassicEditor
        .create(document.querySelector('#review-content'), {
            toolbar: [
                'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo',
                'imageUpload', 'mediaEmbed', 'fontSize', 'fontColor', 'highlight', 'alignment', 
                'fontFamily', 'fontColor', 'backgroundColor', 'insertTable', 'specialCharacters'
            ],
            image: {
                toolbar: ['imageTextAlternative'] // Options for editing image
            },
            mediaEmbed: {
                previewsInData: true // Allow previews of embedded media
            }
        })
        .catch(error => {
            console.error(error);
        });
});







        </script>
 @endsection
