<x-app-layout>
    <div class="min-h-screen bg-white">
        @include('shop.components.shop-by-pet')

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col lg:flex-row gap-8">
                @include('shop.components.sidebar-filters')

                <div class="flex-1">
                    @include('shop.components.search-and-sort')
                    @include('shop.components.product-grid')
                    @include('shop.components.pagination')
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('priceRange', () => ({
                min: 9,
                max: 399,
                currentMin: 9,
                currentMax: 399,
                
                init() {
                    this.$nextTick(() => {
                        this.initSlider()
                    })
                },

                initSlider() {
                    const slider = this.$refs.slider
                    noUiSlider.create(slider, {
                        start: [this.currentMin, this.currentMax],
                        connect: true,
                        range: {
                            'min': this.min,
                            'max': this.max
                        }
                    })

                    slider.noUiSlider.on('update', (values) => {
                        this.currentMin = Math.round(values[0])
                        this.currentMax = Math.round(values[1])
                    })
                }
            }))
        })
    </script>
    @endpush
</x-app-layout>