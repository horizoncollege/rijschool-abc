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
    <div class="container">
        <div class="brick-container">
            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-1">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>

            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-2">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>

            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-3">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>
        </div>
    </div>
    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="https://picsum.photos/500" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Rijles van Alkmaar tot De Rijp</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.<br><br>Volutpat blandit aliquam etiam erat velit scelerisque. Felis imperdiet proin fermentum
                leo vel. Dictumst quisque sagittis purus sit.</p>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
