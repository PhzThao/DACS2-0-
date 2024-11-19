<!-- resources/views/product-grid.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Product List</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="group relative bg-white rounded-2xl border border-gray-100 p-4 transition-all hover:shadow-lg">
                <div class="aspect-square mb-4 overflow-hidden rounded-xl bg-gray-100">
                    <img src="{{ asset($product->image) }}" 
                         alt="{{ $product->name }}"
                         class="h-full w-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">{{ $product->name }}</h3>
                        <p class="mt-1 text-gray-900">${{ number_format($product->price, 2) }}</p>
                    </div>
                    <button class="p-2 rounded-full bg-gray-100 hover:bg-[#fd7e14] hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
