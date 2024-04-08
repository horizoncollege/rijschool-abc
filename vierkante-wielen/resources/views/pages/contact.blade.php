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
            <p> <b>Adres:</b><br>Rijschool Vierkante Wielen<br>Wevershof 22<br>1482PK De Rijp<br><br>
                <b>Telefoon:</b><br>+31 6 12 34 56 78<br><br>
                <b>E-mailadres:</b><br>166389@student.horizoncollege.nl
            </p>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
