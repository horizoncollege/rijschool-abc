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
    <div class="text-afbeelding"> {{-- Text + image --}}
        <div class="afbeelding">
            <img src="{{ asset('images/autorijles-bij-ons.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Plan een gratis proefrijles in van 1 uur!</h2>
            <p>Onze rijschool maakt gebruik van een portal waar u kunt inloggen en zelf uw lestijden in kan
                plannen.<br><br><b>Let wel op:</B> u kunt alleen als inloggen in de portal wanneer u een pakket heeft
                gekocht.</p>
        </div>
    </div>
@endsection

@section('contact-form')
    @include('partials.contact-form') {{-- Include the contact form --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
