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
    <div class="container-personeel"> {{-- Container for staff/medewerkers --}}
        <h2>Ontmoet ons personeel</h2>
        <div class="brick-container-personeel">
            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-1.jpg') }}" alt="Instructeur-1"style="border-radius: 10px;">
                <h3>Tyrone</h3>
                <p>Tyrone is begin 2022 begonnen als instructeur bij Vierkante Wielen. Tyrone geeft speciale lessen voor
                    leerlingen met een handicap.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-2.jpg') }}" alt="Instructeur-2"style="border-radius: 10px;">
                <h3>Emily</h3>
                <p>Emily is in 2021 bij ons komen werken. Emily geeft geen speciale lessen maar heeft wel enorm veel evaring
                    op de weg.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-3.jpg') }}" alt="Instructeur-3"style="border-radius: 10px;">
                <h3>Michael</h3>
                <p>Michael is een baken van steun voor leerlingen met een handicap. Zijn geduld en aanmoediging zorgt voor
                    veel zelfvertrouwen.</p>
            </div>
        </div>
        <div class="brick-container-personeel">
            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-4.jpg') }}" alt="Instructeur-4"style="border-radius: 10px;">
                <h3>Reinout</h3>
                <p>Reinout is niet zomaar een instructeur. Met zijn enthousiaste aanpak en opbeurende woorden moedigt hij de
                    leerlingen aan om te groeien en zelfvertrouwen op te bouwen.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-5.jpg') }}" alt="Instructeur-5"style="border-radius: 10px;">
                <h3>Isa</h3>
                <p>Isa is een toegewijde instructeur die haar leerlingen met warmte en begrip begeleidt. Door haar
                    aanmoediging kunnen leerlingen hun vaardigheden te ontwikkelen en zelfverzekerd de weg op te gaan.</p>
            </div>

            <div class="brick-personeel">
                <img src="{{ asset('images/rijinstructeur-6.jpg') }}" alt="Instructeur-6"style="border-radius: 10px;">
                <h3>Huell</h3>
                <p>Huell staat altijd klaar als een betrouwbare gids voor zijn leerlingen. Huell helpt elke leerling zijn
                    angst te overwinnen.</p>
            </div>
        </div>
    </div>
    <div class="container-autos"> {{-- Container for cars --}}
        <h2>Bekijk onze lesauto's</h2>
        <div class="brick-container-autos">
            <div class="brick-autos">
                <img src="{{ asset('images/volkswagen-golf.jpg') }}" alt="volkswagen-golf"style="border-radius: 10px;">
                <h3>Volkswagen Golf</h3>
                <p>De Volkswagen Golf is een vertrouwde keuze voor rijlessen. Met zijn uitstekende wendbaarheid, betrouwbare
                    prestaties en comfortabele interieur, biedt de Golf een ideale omgeving om uw rijvaardigheden te
                    ontwikkelen.</p>
            </div>
            <div class="brick-autos">
                <img src="{{ asset('images/ford-focus.jpg') }}" alt="ford-focus"style="border-radius: 10px;">
                <h3>Ford Focus</h3>
                <p>De Ford Focus is een icoon onder rijinstructeurs. Met zijn dynamische rijgedrag, geavanceerde
                    technologieën en ruime interieur, biedt de Focus een plezierige en leerzame rijervaring voor elke
                    leerling.</p>
            </div>
            <div class="brick-autos">
                <img src="{{ asset('images/caddy-maxi-life.jpg') }}"
                    alt="volkswagen-caddy-maxi-life"style="border-radius: 10px;">
                <h3>Volkswagen Caddy Maxi Life</h3>
                <p>Speciaal ontworpen voor leerlingen met een handicap, biedt de aangepaste Volkswagen Caddy Maxi Life
                    optimale toegankelijkheid en gebruiksgemak. Met zijn handbediening en aanpassingen voor rolstoelgebruik,
                    stelt deze auto leerlingen met een handicap in staat om veilig en comfortabel te leren rijden.</p>
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
