@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

<div class="hero-image">
    <div class="hero-text">
        <h1>Contact</h1>
        <p>Heb je vragen of hulp nodig? Wij staan altijd voor u klaar om u te assisteren. Aarzel niet om contact met ons
            op te nemen via de onderstaande contactgegevens of het contactformulier.</p>
    </div>
</div>

@section('action-bar')
    @include('partials.action-bar') {{-- Include the action-bar section --}}
@endsection

@section('content')
    <div class="text-afbeelding"> {{-- Text + image --}}
        <div class="afbeelding">
            @include('partials.contact-form') {{-- Include the contact form --}}
        </div>
        <div class="text">
            <h2>Neem contact met ons op</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.<br><br>Volutpat blandit aliquam etiam erat velit scelerisque. Felis imperdiet proin fermentum
                leo vel. Dictumst quisque sagittis purus sit.</p>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
