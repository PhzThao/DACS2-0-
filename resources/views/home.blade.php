@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Instrument+Sans:wght@400;700&family=Otomanopee+One&family=Shadows+Into+Light+Two&family=Inria+Serif&display=swap" rel="stylesheet">

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full relative bg-white mt-14">
        <main>
            @include('partials.hero(home)')
            @include('partials.services')
            @include('partials.importance')
            @include('partials.why_choose_us')
            @include('partials.about')
            @include('partials.statistics')
        </main>
    </div>
</div>
@endsection
