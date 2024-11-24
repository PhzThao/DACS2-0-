@extends('layouts.app')

@section('title', 'HappyPet - Appointment Schedule')

@section('content')
<div class="flex flex-col items-center bg-[#b6cfff] p-6 rounded-lg mb-10 mt-12">
    <!-- Header Section -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-[#161550] mb-4">Appointment Schedule</h1>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col md:flex-row justify-between w-full gap-8">
        <!-- Left: Image -->
        <div class="w-full md:w-1/3 flex justify-center">
            <img src="{{ asset('images/pet-appointment.png') }}" alt="Pet and Appointment" class="w-full h-auto rounded-lg">
        </div>

        <!-- Right: Calendar -->
        <div class="w-full md:w-2/3 bg-white p-6 rounded-lg">
            <div class="text-center text-lg font-semibold text-gray-700 mb-4">
                <span>Month:</span>
                <span class="text-[#1e5dbc]">{{ now()->format('F Y') }}</span>
            </div>
            <!-- Calendar grid logic (unchanged) -->
            <div class="grid grid-cols-7 gap-2 bg-[#d0e3ff] p-4 rounded-xl text-center text-[#1e5dbc] font-semibold mt-6">
                <!-- Days of the Week -->
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                <div>Sun</div>
            
                <!-- Empty cells for days before the month starts -->
                @php
                    $daysInMonth = \Carbon\Carbon::now()->daysInMonth;
                    $firstDayOfMonth = \Carbon\Carbon::now()->startOfMonth()->dayOfWeek;
                    $offset = $firstDayOfMonth === 0 ? 6 : $firstDayOfMonth - 1;
                @endphp

                @for ($i = 0; $i < $offset; $i++)
                    <div class="bg-transparent"></div>
                @endfor

                <!-- Calendar Dates -->
                @for ($i = 1; $i <= $daysInMonth; $i++)
                    @php
                        $date = \Carbon\Carbon::now()->startOfMonth()->addDays($i - 1)->format('Y-m-d');
                        $appointment = $appointments->firstWhere('date', $date);
                    @endphp
                    <div class="bg-[#e6f0ff] p-2 rounded-lg relative">
                        <span>{{ sprintf('%02d', $i) }}</span>
                        @if ($appointment)
                            <div class="mt-2 text-xs bg-[#ffcccb] p-1 rounded-lg">
                                {{ $appointment->time }}<br>
                                <span class="italic">{{ $appointment->note ?? 'No notes' }}</span>
                            </div>
                        @endif
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<!-- Book Now Section -->
<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl mx-auto mt-8 mb-14">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Book Now</h2>
    <div class="space-y-4">
        <!-- Select Doctor -->
        <a href="{{ route('doctor') }}" class="block bg-blue-500 text-white text-center font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition">
            Select Doctor
        </a>

        <!-- Select Address -->
        <a href="{{ route('address') }}" class="block bg-green-500 text-white text-center font-bold py-2 px-4 rounded-lg hover:bg-green-600 transition">
            Your Address
        </a>

        <!-- Select Time Button -->
        <div class="mt-8 space-y-4">
            <button 
                class="flex justify-between items-center w-full bg-[#1e5dbc] text-white font-semibold text-lg px-6 py-4 rounded-xl"
                onclick="openTimePicker()">
                Choose Appointment Time
            </button>
        </div>

        <!-- Submit Button -->
        <form action="{{ route('as.store') }}" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="selected_date" id="selected_date">
            <input type="hidden" name="selected_time" id="selected_time">
            <button type="submit" class="bg-[#1e5dbc] text-white font-bold py-2 px-4 rounded-lg hover:bg-[#184a9e] transition">
                Book Appointment
            </button>
        </form>
    </div>
</div>

<!-- Time Picker Modal -->
<div id="time-picker-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center mb-4">Select Date and Time</h2>
        <input type="date" id="appointment-date-picker" class="p-2 border rounded-md w-full mb-4">
        <input type="time" id="appointment-time-picker" class="p-2 border rounded-md w-full mb-4">
        <div class="flex justify-between">
            <button onclick="saveAppointment()" class="bg-[#1e5dbc] text-white px-4 py-2 rounded-lg">Save</button>
            <button onclick="closeTimePicker()" class="bg-gray-300 px-4 py-2 rounded-lg">Cancel</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Open the time picker modal
    function openTimePicker() {
        document.getElementById('time-picker-modal').classList.remove('hidden');
    }

    // Close the time picker modal
    function closeTimePicker() {
        document.getElementById('time-picker-modal').classList.add('hidden');
    }

    // Save the selected appointment time
    function saveAppointment() {
        const date = document.getElementById('appointment-date-picker').value;
        const time = document.getElementById('appointment-time-picker').value;

        if (date && time) {
            // Save values to the hidden inputs in the form
            document.getElementById('selected_date').value = date;
            document.getElementById('selected_time').value = time;

            // Close the modal
            closeTimePicker();
        } else {
            alert('Please select both a date and time.');
        }
    }
</script>
@endsection
