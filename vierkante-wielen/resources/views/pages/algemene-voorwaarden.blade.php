@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

<div class="hero-image">
    <div class="hero-text">
        <h1>Algemene voorwaarden</h1>
        <div class="menu-buttons-hero">
            <button class="yellow-button" onclick="scrollToContactForm()">Lees verder</button>
        </div>
    </div>
</div>

@section('action-bar')
    <div id="proefles_contact">
        @include('partials.action-bar') {{-- Include the action-bar section --}}
    </div>
@endsection

@section('content')
    <div class="algemene-voorwaarden"> {{-- Text for the 'Algemene Voorwaarden' --}}
        <div class="text-av">
            <h1>Algemene Voorwaarden</h1><br></br>
            <p>Welkom bij Autorijschool Vierkante Wielen. Voordat je gebruikmaakt van onze diensten, vragen we je
                vriendelijk om deze algemene voorwaarden zorgvuldig door te lezen. Deze voorwaarden regelen jouw gebruik van
                onze website en onze diensten. Door gebruik te maken van onze website en diensten, ga je akkoord met deze
                voorwaarden. Als je het niet eens bent met een of meer van deze voorwaarden, verzoeken wij je vriendelijk om
                onze website niet te gebruiken.</p>

            <h2>Diensten</h2>
            <p><b>1.1</b> Autorijschool Vierkante Wielen biedt rijlesdiensten aan individuen volgens de geldende wet- en
                regelgeving in Nederland.</p>
            <p><b>1.2</b> De details met betrekking tot onze diensten, inclusief prijzen, zijn beschikbaar op onze website.
                We
                behouden ons het recht voor om deze informatie op elk moment te wijzigen zonder voorafgaande kennisgeving.
            </p>

            <h2>Boekingen en Betalingen</h2>
            <p><b>2.1</b> Alle boekingen voor rijlessen moeten worden gemaakt via onze website of telefonisch.</p>
            <p><b>2.2</b> Betalingen voor rijlessen dienen vooraf te worden voldaan, tenzij anders overeengekomen.</p>
            <p><b>2.3</b> Eventuele annuleringen of wijzigingen in boekingen dienen minimaal 48 uur van tevoren te worden
                gemeld.
                Anders kunnen annuleringskosten in rekening worden gebracht.</p>

            <h2>Aansprakelijkheid</h2>
            <p><b>3.1</b> Autorijschool Vierkante Wielen streeft ernaar om hoogwaardige diensten te leveren, maar kan niet
                aansprakelijk worden gesteld voor verlies of schade als gevolg van gebruik van onze diensten.</p>
            <p><b>3.2</b> Het gebruik van onze diensten geschiedt op eigen risico. Wij zijn niet verantwoordelijk voor enige
                schade, letsel of verlies van eigendommen die voortvloeien uit het gebruik van onze diensten.</p>

            <h2>Intellectueel Eigendom</h2>
            <p><b>4.1</b> Alle inhoud op onze website, inclusief maar niet beperkt tot tekst, afbeeldingen, logo's, en
                video's,
                zijn eigendom van Autorijschool Vierkante Wielen en zijn beschermd door auteursrecht en andere intellectuele
                eigendomsrechten.</p>
            <p><b>4.2</b> Het is niet toegestaan om onze inhoud te kopiëren, reproduceren, verspreiden of te gebruiken voor
                commerciële doeleinden zonder onze uitdrukkelijke toestemming.</p>

            <h2>Wijzigingen van Voorwaarden</h2>
            <p><b>5.1</b> Autorijschool Vierkante Wielen behoudt zich het recht voor om deze algemene voorwaarden op elk
                moment te
                wijzigen. Het is jouw verantwoordelijkheid om regelmatig te controleren op updates van deze voorwaarden.</p>
            <p>Door gebruik te maken van onze website en diensten, stem je in met de meest recente versie van deze algemene
                voorwaarden.</p>

            <h2>Contact</h2>
            <p><b>6.1</b> Als je vragen, opmerkingen of klachten hebt over deze algemene voorwaarden of onze diensten, neem
                dan
                gerust <a href="{{ url('contact') }}">contact</a> met ons op.</p>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection

<script>
    function scrollToContactForm() {
        document.getElementById('proefles_contact').scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
