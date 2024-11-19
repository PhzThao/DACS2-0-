<!-- resources/views/shop/search-and-sort.blade.php -->

<form class="flex flex-col sm:flex-row gap-4 justify-between items-center mb-8" id="search-form">
    <!-- Search input -->
    <div class="relative w-full sm:w-96">
        <input type="text" name="search" id="search" 
               placeholder="Search Product" 
               class="w-full px-4 py-2 rounded-full bg-[#ffdcc9]/20 border-none focus:ring-2 focus:ring-[#fd7e14]" 
               aria-label="Search Product" oninput="searchProducts()">
        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </div>

    <!-- Sort dropdown -->
    <select name="sort" id="sort" class="w-full sm:w-48 px-4 py-2 rounded-lg border-gray-300 focus:border-[#fd7e14] focus:ring-[#fd7e14]" onchange="searchProducts()">
        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Sort by latest</option>
        <option value="price_low_to_high" {{ request('sort') == 'price_low_to_high' ? 'selected' : '' }}>Price: Low to High</option>
        <option value="price_high_to_low" {{ request('sort') == 'price_high_to_low' ? 'selected' : '' }}>Price: High to Low</option>
    </select>
</form>

<!-- Add AJAX functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function searchProducts() {
        var searchQuery = $('#search').val();  // Get the search query
        var sortOption = $('#sort').val();    // Get the selected sort option

        // Make AJAX request
        $.ajax({
            url: '{{ route("products.search") }}',  // AJAX route
            type: 'GET',
            data: { 
                search: searchQuery, 
                sort: sortOption
            },
            success: function(data) {
                var productsContainer = $('#products-container');
                productsContainer.empty();  // Clear existing products

                // Loop through the products and append them to the container
                data.forEach(function(product) {
                    productsContainer.append(
                        '<div class="product-card">' +
                            '<h3>' + product.name + '</h3>' +
                            '<p>' + product.price + '</p>' +
                            '<a href="/products/' + product.id + '" class="text-blue-600">View Details</a>' +
                        '</div>'
                    );
                });
            }
        });
    }
</script>
