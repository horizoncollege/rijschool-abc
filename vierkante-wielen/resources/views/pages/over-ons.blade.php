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
            <img src="{{ asset('images/rolstoel-rijles.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Over Vierkante Wielen</h2>
            <p>In het afgelopen jaar is rijschool Vierkante Wielen enorm gegroeid tot een rijschool die zijn best doet om
                iedereen in één keer te laten slagen.<br><br>Daarnaast is onze rijschool ook erg flexibel. Wanneer er een
                rijinstructeur ziek is, is er altijd een andere rijinstructeur beschikbaar.
            </p>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
