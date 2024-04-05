@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

<div class="hero-image">
    <div class="hero-text">
        <h1>Gratis proefrijles inplannen</h1>
        <div class="menu-buttons-hero">
            <a href="{{ url('gratis-proefrijles') }}"><button class="yellow-button">Gratis proefrijles aanvragen</button></a>
        </div>
    </div>
</div>

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
            <p>Tijdens een proefrijles maak je kennis met onze rijschool. Daarnaast krijg je ook inzicht in welk lespakket
                het best bij jou past!<br><br>Nieuwsgierig? Vul dan ons <a href="{{ url('contact') }}">contactformulier</a> in en
                wij
                nemen zo snel mogelijk contact
                met je op om een afspraak te maken.</p>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
