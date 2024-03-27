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
            <img src="{{ asset('images/autorijles-bij-ons.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Autorijles bij Vierkante Wielen</h2>
            <p>Onze rijschool maakt gebruik van een portal waar u kunt inloggen en zelf uw lestijden in kan
                plannen.<br><br><u>Let wel op:</u> u kunt alleen als inloggen in de portal wanneer u een pakket heeft gekocht. Deze
                pakketten zijn te vinden onder <b><a href="{{ url('tarieven') }}">tarieven</b></a>.</p>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
