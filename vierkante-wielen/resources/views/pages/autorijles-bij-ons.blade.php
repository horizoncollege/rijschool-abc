@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

<div class="hero-image">
    <div class="hero-text">
        <h1>Autorijles bij ons</h1>
        <p></p>
    </div>
</div>

@section('action-bar')
    @include('partials.action-bar') {{-- Include the action-bar section --}}
@endsection

@section('content')
    <div class="text-afbeelding"> {{-- Text + image --}}
        <div class="afbeelding">
            <img src="{{ asset('images/rijles-met-handicap.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Autorijles bij Vierkante Wielen</h2>
            <p>Onze rijschool maakt gebruik van een portal waar u kunt inloggen en zelf uw lestijden in kan
                plannen.<br><br><b>Let wel op:</B> u kunt alleen als inloggen in de portal wanneer u een pakket heeft
                gekocht. Deze
                pakketten zijn te vinden onder <a href="{{ url('lespakketten') }}">lespakketten</a>.</p>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
