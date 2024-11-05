@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="w-full relative bg-white">
            <main>
                @include('hero(home)')
                @include('services', ['services' => $services])
                @include('importance', ['importancePoints' => $importancePoints])
                @include('why_choose_us')
                @include('about')
                @include('statistics')
            </main>
        </div>
    </div>
@endsection