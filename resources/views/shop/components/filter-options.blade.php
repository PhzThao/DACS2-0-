<div class="space-y-8">
    {{-- Categories --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Filter by categories</h3>
        <div class="space-y-2">
            @foreach ($categories as $category)
                <a href="{{ route('category.index', ['id' => $category->id]) }}" 
                   class="flex items-center justify-between cursor-pointer group">
                    <div class="flex items-center gap-2">
                        <input type="radio" 
                               name="category" 
                               value="{{ $category->id }}" 
                               {{ isset($selectedCategory) && $selectedCategory->id == $category->id ? 'checked' : '' }} 
                               class="hidden">
                        <span class="text-gray-900 group-hover:text-[#fd7e14]">{{ $category->name }}</span>
                    </div>
                    <span class="px-2 py-1 text-sm text-[#fd7e14] bg-gray-100 rounded-xl">
                        {{ $category->products_count }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Price Range --}}
    <div x-data="priceRange">
        <h3 class="text-xl font-semibold mb-4">Filter by Price</h3>
        <div class="px-2">
            <div x-ref="slider" class="my-6"></div>
            <div class="flex items-center justify-between">
                <span class="text-gray-900">Price: $<span x-text="currentMin"></span> - $<span x-text="currentMax"></span></span>
                <button class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition" onclick="applyPriceFilter()">Apply</button>
            </div>
        </div>
    </div>

    {{-- Brands --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Filter by brands</h3>
        <div class="space-y-2">
            @foreach ($brands as $brand)
                <a href="{{ route('brand.index', ['id' => $brand->id]) }}" 
                   class="flex items-center justify-between cursor-pointer group">
                    <div class="flex items-center gap-2">
                        <input type="radio" 
                               name="brand" 
                               value="{{ $brand->id }}" 
                               {{ isset($selectedBrand) && $selectedBrand->id == $brand->id ? 'checked' : '' }} 
                               class="hidden">
                        <span class="text-gray-900 group-hover:text-[#fd7e14]">{{ $brand->name }}</span>
                    </div>
                    <span class="px-2 py-1 text-sm text-[#fd7e14] bg-gray-100 rounded-xl">
                        {{ $brand->products_count }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Tags --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Filter by tags</h3>
        <div class="flex flex-wrap gap-2">
            @foreach(['Dog food', 'Cat food', 'Natural', 'Parrot', 'Small dog', 'Cat'] as $tag)
                <button class="px-4 py-2 bg-gray-100 hover:bg-[#fd7e14] hover:text-white rounded-xl transition-colors">
                    {{ $tag }}
                </button>
            @endforeach
        </div>
    </div>

    {{-- Popular Products --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Popular products</h3>
        <div class="space-y-4">
            @foreach([['Premium Dog Food', 99], ['Premium Cat Food', 220], ['Cat Bed', 50], ['Dog Leash', 220], ['Cat Bowl', 220]] as [$name, $price])
            <div class="flex items-center gap-3">
                <div class="w-20 h-14 bg-gray-100 rounded"></div>
                <div>
                    <h4 class="font-medium">{{ $name }}</h4>
                    <p class="text-sm font-semibold">${{ $price }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function filterProducts() {
        const params = new URLSearchParams();

        // Lấy giá trị category
        const category = document.querySelector('input[name="category"]:checked');
        if (category) params.append('category', category.value);

        // Lấy giá trị brand
        const brand = document.querySelector('input[name="brand"]:checked');
        if (brand) params.append('brand', brand.value);

        // Lấy giá trị min_price và max_price
        const minPrice = document.getElementById('min-price')?.value || '';
        const maxPrice = document.getElementById('max-price')?.value || '';
        if (minPrice && maxPrice) {
            params.append('min_price', minPrice);
            params.append('max_price', maxPrice);
        }

        // Gửi request AJAX
        fetch(`/services/shop?${params.toString()}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('product-list').innerHTML = html; // Cập nhật danh sách sản phẩm
        })
        .catch(error => console.error('Error:', error));
    }

    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('change', filterProducts);
    });
</script>

