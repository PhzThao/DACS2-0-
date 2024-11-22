@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content') 
<div class="max-w-screen-xl mx-auto p-6 bg-white rounded-xl shadow-lg mt-10">
    <!-- Sử dụng flex để bố trí ngang -->
    <div class="flex">
      <!-- Left Section (Giỏ hàng) -->
      @foreach($cart as $item)
    @if(isset($item['id']))
        <!-- Hiển thị sản phẩm nếu có 'id' -->
        <div class="cart-item">
            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="product-image">
            <div class="product-info">
                <h3>{{ $item['name'] }}</h3>
                <p>Số lượng: {{ $item['quantity'] }}</p>
                <p>Giá: {{ number_format($item['price'], 0, ',', '.') }} VND</p>
            </div>
            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-[#6268c6] text-xs">Xóa</button>
            </form>
        </div>
    @else
        <p>Sản phẩm không có ID!</p>
    @endif
@endforeach

@if (empty($cart))
    <p>Giỏ hàng của bạn đang trống.</p>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


  
      <!-- Right Section (Thanh toán) -->
      <div class="w-1/2 ml-12"> <!-- Thêm ml-12 để tăng khoảng cách giữa giỏ hàng và form -->
        <div class="bg-[#565abb] p-4 rounded-2xl">
          <div class="text-[#fdfbfb] text-xl font-semibold mb-4 font-bold text-center">PAY</div>
  
          <!-- Form Inputs -->
          <div class="space-y-1"> <!-- Giảm space-y để khoảng cách giữa các trường form nhỏ lại -->
            <!-- Name -->
            <div class="relative">
              <label for="name" class="text-xm text-[#fdfbfb] font-medium">Name:</label>
              <input id="name" type="text" class="w-full mt-1 p-2 bg-[#6268c6] rounded-md text-white placeholder-[#c4c4c4] text-xs" placeholder="Name">
            </div>
  
            <!-- Phone -->
            <div class="relative">
              <label for="phone" class="text-xm text-[#fdfbfb] font-medium">Phone:</label>
              <input id="phone" type="text" class="w-full mt-1 p-2 bg-[#6268c6] rounded-md text-white placeholder-[#c4c4c4] text-xs" placeholder="9999999999">
            </div>
  
            <!-- Address -->
            <div class="relative">
              <label for="address" class="text-xm text-[#fdfbfb] font-medium">Address:</label>
              <textarea id="address" class="w-full mt-1 p-2 bg-[#6268c6] rounded-md text-white placeholder-[#c4c4c4] text-xs" placeholder="Country, Province/City, District, Ward/Commune"></textarea>
            </div>
  
            <!-- Note -->
            <div class="relative">
              <label for="note" class="text-xm text-[#fdfbfb] font-medium">Note:</label>
              <textarea id="note" class="w-full mt-1 p-2 bg-[#6268c6] rounded-md text-white placeholder-[#c4c4c4] text-xs" placeholder="Enter notes"></textarea>
            </div>
          </div>
  
          <!-- Totals Section -->
          <div class="mt-4 space-y-2">
            <div class="flex justify-between text-[#fdfbfb] text-xs font-medium">
              <span>Subtotal:</span>
              <span>$1,668</span>
            </div>
            <div class="flex justify-between text-[#fdfbfb] text-xs font-medium">
              <span>Shipping:</span>
              <span>$4</span>
            </div>
            <div class="flex justify-between text-[#fdfbfb] text-xs font-medium">
              <span>Total (Tax incl.):</span>
              <span>$1,672</span>
            </div>
          </div>
  
          <!-- Checkout Button -->
          <div class="mt-3">
            <button class="w-full py-2 bg-[#4de1c1] text-white text-base font-semibold rounded-xl">Check out</button>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
    