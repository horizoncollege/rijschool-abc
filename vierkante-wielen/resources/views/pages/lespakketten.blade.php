@extends('layouts.layout') {{-- Include the layout --}}

@section('title', 'Autorijschool De Vierkante Wielen') {{-- Include the title --}}

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
    <h1>Lespakketten</h1>
    <div class="brick-container-tarieven"> {{-- Container for tarieven  --}}
        <div class="brick-tarieven"> {{-- Lespakket 1 --}}
            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
            <h2>Proefles van 60 minuten</h2>
            <h3>1399,-</h3>
            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
            <ul class="list-check">
                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li><br>
                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen voor
                    het praktijkexamen.</li><br>
                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                    proefles, waarbij de proefles
                    gratis is.</li><br>
                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt er
                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                    <a href="{{ url('register') }}"><button class="yellow-button">Aanmelden</button></a>
                </div>
            </ul>
        </div>
        <div class="brick-tarieven"> {{-- Lespakket 2 --}}
            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
            <h2>Proefles van 60 minuten</h2>
            <h3>1399,-</h3>
            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
            <ul class="list-check">
                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li><br>
                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen voor
                    het praktijkexamen.</li><br>
                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                    proefles, waarbij de proefles
                    gratis is.</li><br>
                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt er
                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                    <a href="{{ url('register') }}"><button class="yellow-button">Aanmelden</button></a>
                </div>
            </ul>
        </div>
        <div class="brick-tarieven"> {{-- Lespakket 3 --}}
            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1">
            <h2>Proefles van 60 minuten</h2>
            <h3>1399,-</h3>
            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
            <ul class="list-check">
                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li><br>
                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen voor
                    het praktijkexamen.</li><br>
                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                    proefles, waarbij de proefles
                    gratis is.</li><br>
                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt er
                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                    <a href="{{ url('register') }}"><button class="yellow-button">Aanmelden</button></a>
                </div>
            </ul>
        </div>
    </div>
@endsection

@section('usp')
    @include('partials.usp') {{-- Include the USP --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
