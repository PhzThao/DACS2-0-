<div x-data="{ mobileFilters: false }" class="w-full lg:w-72">
    {{-- Mobile filter dialog --}}
    <div x-show="mobileFilters" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        {{-- Mobile filter backdrop --}}
        <div x-show="mobileFilters" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">
            <div x-show="mobileFilters"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
                {{-- Filter content for mobile --}}
                <div class="px-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center" @click="mobileFilters = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Filter options --}}
                @include('shop.components.filter-options')
            </div>
        </div>
    </div>

    {{-- Desktop filters --}}
    <div class="hidden lg:block">
        @include('shop.components.filter-options')
    </div>
</div>