@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('hero')
    @include('partials.hero') {{-- Include the hero section --}}
@endsection

@section('action-bar')
    @include('partials.action-bar') {{-- Include the action-bar section --}}
@endsection

@section('content')
    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="{{ asset('images/rijles-met-handicap.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Neem contact met ons op</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.<br><br>Volutpat blandit aliquam etiam erat velit scelerisque. Felis imperdiet proin fermentum
                leo vel. Dictumst quisque sagittis purus sit.</p>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
