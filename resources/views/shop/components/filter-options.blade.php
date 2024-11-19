<div class="space-y-8">
    {{-- Categories --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Filter by categories</h3>
        <div class="space-y-2">
            @foreach([
                'Furniture' => 21,
                'Bowls' => 28,
                'Clothing' => 12,
                'Food' => 80,
                'Toys' => 90,
                'Sale' => 24
            ] as $category => $count)
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-[#fd7e14] focus:ring-[#fd7e14]">
                    <span class="text-gray-900 group-hover:text-[#fd7e14]">{{ $category }}</span>
                </div>
                <span class="px-2 py-1 text-sm text-[#fd7e14] bg-gray-100 rounded-xl">{{ $count }}</span>
            </label>
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
                <button class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
                    Apply
                </button>
            </div>
        </div>
    </div>

    {{-- Brands --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">Filter by brands</h3>
        <div class="space-y-2">
            @foreach([
                'Natural food' => 28,
                'Pet care' => 18,
                'Dogs friend' => 16,
                'Pet food' => 40,
                'Favorite pet' => 28,
                'Green line' => 18
            ] as $brand => $count)
            <label class="flex items-center justify-between cursor-pointer group">
                <div class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-[#fd7e14] focus:ring-[#fd7e14]">
                    <span class="text-gray-900 group-hover:text-[#fd7e14]">{{ $brand }}</span>
                </div>
                <span class="px-2 py-1 text-sm text-[#fd7e14] bg-gray-100 rounded-xl">{{ $count }}</span>
            </label>
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
            @foreach([
                ['Premium Dog Food', 99],
                ['Premium Cat Food', 220],
                ['Cat Bed', 50],
                ['Dog Leash', 220],
                ['Cat Bowl', 220]
            ] as [$name, $price])
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