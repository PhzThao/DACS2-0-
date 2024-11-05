@extends('layouts.app')

@section('title', 'HappyPet - Dịch vụ chăm sóc thú cưng')

@section('content')
<div class="flex flex-col md:flex-row items-center gap-8 bg-primary-light rounded-lg p-8 mb-12">
        <!-- Left Side: Service Detail Text, set width to 2/3 -->
        <div class="md:w-2/3">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 font-otomanopee">Appointment schedule</h1>
        </div>

        <!-- Right Side: Large Image, set width to 1/3 -->
        <div class="md:w-1/3 flex justify-center">
            <img src="{{ mix('images/inner-hero-banner 1.png') }}" alt="Service Detail Image" class="w-full h-auto rounded-lg object-cover transition-transform duration-300 ease-in-out hover:scale-105">
        </div>  
    </div>

<div class="flex justify-center bg-gray-100 py-10">
    <div class="bg-[#b6cfff] w-full max-w-4xl p-8 rounded-2xl">
        <!-- Header Text -->
        <div class="text-3xl font-bold text-[#161550]">
            Appointment schedule
        </div>

        <!-- Calendar and Image Section -->
        <div class="flex gap-10">
            <!-- Pet Image -->
            <img src="{{ mix('images/Thiết kế chưa có tên 4.png') }}" alt="Pet Image" class="w-72 h-79 rounded-lg object-cover mt-9">
            
            <!-- Calendar -->
            <div class="flex-grow">
                <div class="text-center text-xl font-bold text-[#1e5dbc] mb-2">THÁNG 5 🐾</div>
                <div class="grid grid-cols-7 gap-2 bg-[#d0e3ff] p-4 rounded-xl text-center text-[#1e5dbc] font-semibold">
                    <!-- Days of the Week -->
                    <div>Thứ 2</div>
                    <div>Thứ 3</div>
                    <div>Thứ 4</div>
                    <div>Thứ 5</div>
                    <div>Thứ 6</div>
                    <div>Thứ 7</div>
                    <div>Chủ Nhật</div>
                
                    <!-- Empty Cells for Days Before May Starts -->
                    <div class="bg-[#e6f0ff] p-2 rounded-lg">28</div>
                    <div class="bg-[#e6f0ff] p-2 rounded-lg">29</div>
                    <div class="bg-[#e6f0ff] p-2 rounded-lg">30</div>
                
                    <!-- Calendar Dates for May -->
                    @for ($i = 1; $i <= 31; $i++)
                        <div class="bg-[#e6f0ff] p-2 rounded-lg">{{ sprintf('%02d', $i) }}</div>
                    @endfor
                    <div class="bg-[#e6f0ff] p-2 rounded-lg">01</div>
                </div>
            </div>
        </div>

        <!-- Appointment Info -->
        <div class="flex justify-center mt-8">
            <div class="bg-[#e6dfff] rounded-full w-48 h-48 flex flex-col items-center justify-center text-[#161550] font-bold p-4 text-center">
                <div class="text-xl">Monday</div>
                <div class="text-lg">14/10/2024</div>
                <div class="text-lg">14:15:30</div>
                <div class="text-xsm font-normal mt-2 text-center">You don’t have any appointments scheduled</div>
            </div>
        </div>

        <!-- Booking Section -->
        <div class="mt-8 space-y-4">
            <button class="flex justify-between items-center w-full bg-[#d0e3ff] text-[#161550] font-semibold text-lg px-6 py-4 rounded-xl">
                Select doctor <span>&gt;</span>
            </button>
            <button class="flex justify-between items-center w-full bg-[#d0e3ff] text-[#161550] font-semibold text-lg px-6 py-4 rounded-xl">
                Your address <span>&gt;</span>
            </button>
        </div>
    </div>
</div>
@endsection
