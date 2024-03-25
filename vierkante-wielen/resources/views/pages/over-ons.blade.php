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

    <div class="container-personeel">
        <h2>Ontmoet ons personeel</h2>
        <div class="brick-container-personeel">
            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-1.jpg') }}" alt="Instructeur-1"style="border-radius: 10px;">
                <h3>Tyrone</h3>
                <p>Tyrone is begin 2022 begonnen als instructeur bij Vierkante Wielen. Tyrone geeft speciale lessen voor leerlingen met een handicap.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-2.jpg') }}" alt="Instructeur-2"style="border-radius: 10px;">
                <h3>Emily</h3>
                <p>Emily is in 2021 komen werken. Emily geeft geen speciale lessen maar heeft wel enorm veel evaring op de weg.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-3.jpg') }}" alt="Instructeur-3"style="border-radius: 10px;">
                <h3>Michael</h3>
                <p>Michael is een baken van steun voor leerlingen met een handicap. Zijn geduld en aanmoediging zorgt voor veel zelfvertrouwen.</p>
            </div>
        </div>
        <div class="brick-container-personeel">
            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-4.jpg') }}" alt="Instructeur-4"style="border-radius: 10px;">
                <h3>Reinout</h3>
                <p>Reinout is niet zomaar een instructeur. Met zijn empathische aanpak en opbeurende woorden moedigt hij hen aan om te groeien en zelfvertrouwen op te bouwen.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-5.jpg') }}" alt="Instructeur-5"style="border-radius: 10px;">
                <h3>Isa</h3>
                <p>Isa is een toegewijde instructeur die haar leerlingen met warmte en begrip begeleidt. Door haar aanmoediging vinden leerlingen hun vaardigheden te ontwikkelen en zelfverzekerd de weg op te gaan.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-6.jpg') }}" alt="Instructeur-6"style="border-radius: 10px;">
                <h3>Huell</h3>
                <p>Huell staat altijd klaar als een betrouwbare gids voor zijn leerlingen. Huell helpt elke leerling zijn angst te overwinnen.</p>
            </div>
        </div>
    </div>

@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
