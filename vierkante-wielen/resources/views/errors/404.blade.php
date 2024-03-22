@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('content')
    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="{{ asset('images/404-afbeelding-nieuw.png') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Ben je de weg kwijt?🤔</h2>
            <p>De inhoud die je zoekt, bestaat niet. Het is ofwel verwijderd, of je hebt de link verkeerd
                getypt.<br></p>
                <div class="menu-buttons-404">
                    <a href="{{ url('') }}"><button class="blue-button-404">Terug naar de homepage</button></a>
                    <a href="{{ url('contact') }}"><button class="yellow-button">Neem contact op</button></a>
                </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
