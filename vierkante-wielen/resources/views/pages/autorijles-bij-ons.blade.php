@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('hero')
    @include('partials.hero') {{-- Include the hero section --}}
@endsection

@section('content')
    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="https://picsum.photos/500" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Autorijles bij ons</h2>
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
