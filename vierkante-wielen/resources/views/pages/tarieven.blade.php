@extends('layouts.layout') {{-- Include the layout --}}

@section('title', 'Autorijschool De Vierkante Wielen') {{-- Include the title --}}

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

<div class="hero-image">
    <div class="hero-text">
        <h1>Tarieven test</h1>
        <p>Bij Vierkante Wielen hanteren we scherpe tarieven voor je rijles. Je kan losse lessen of lespakketten
            afnemen. Wil je advies hierover, neem dan contact op en we bespreken de mogelijkheden.</p>
    </div>
</div>

@section('action-bar')
    @include('partials.action-bar') {{-- Include the action-bar section --}}
@endsection

@section('content')
    <div class="lespakketten">
        <h1>Lespakketten</h1>
        <div class="brick-container-tarieven">

            <div class="tarief">
                <div class="brick-tarieven">
                    <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
                    <h2>Proefles van 60 minuten</h2>
                    <h3>GRATIS</h3>
                    <ul class="list-check">
                        <p>
                            <li>Maak kennis met Autorijschool Vierkante Wielen met een gratis proefles van 60 minuten.
                                Ontmoet
                                onze
                                instructeur, ervaar onze lesaanpak, en krijg feedback over je rijvaardigheden.</li>
                        </p>
                        <p>
                            <li>We beoordelen je rijgedrag en adviseren over het aantal lessen voor het praktijkexamen.
                                Besluit
                                je
                                verder
                                te gaan, dan bieden we een passend lespakket aan. Anders kost de proefles €50.</li>
                        </p>
                    </ul>
                </div>
                <div class="menu-buttons-tarieven">
                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                </div>
            </div>

            <div class="tarief">
                <div class="brick-tarieven">
                    <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
                    <h2>Losse les van 60 minuten</h2>
                    <h3>€55,-</h3>
                    <ul class="list-check">
                        <p>
                            <li>Een reguliere rijles bij Autorijschool Vierkante Wielen duurt 60 minuten en omvat zowel
                                praktijk
                                als
                                theorie. Krijg inzicht in verkeerssituaties, leer rijtechnieken en ontvang feedback op je
                                rijvaardigheid.</li>
                        </p>
                        <p>
                            <li>Indien nodig kan een les 90 minuten duren. Meld je aan voor een losse les voor €55,- per
                                uur.
                            </li>
                        </p>
                    </ul>
                </div>
                <div class="menu-buttons-tarieven">
                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                </div>
            </div>

            <div class="tarief">
                <div class="brick-tarieven">
                    <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
                    <h2>Praktijkexamen of Tussentijdse Toets</h2>
                    <h3>€235,75</h3>
                    <ul class="list-check">
                        <p>
                            <li>Vraag je praktijkexamen of tussentijdse toets aan voor €235,75. Bereid je voor met een
                                laatste lesuur
                                voor het examen om zelfverzekerd en goed voorbereid aan te treden.</li>
                        </p>
                        <p>
                            <li>Onze instructeurs zullen je begeleiden bij het aanvragen van je examens en je voorzien van
                                de nodige
                                ondersteuning en feedback om ervoor te zorgen dat je slaagt.</li>
                        </p>
                    </ul>
                </div>
                <div class="menu-buttons-tarieven">
                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                </div>
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
