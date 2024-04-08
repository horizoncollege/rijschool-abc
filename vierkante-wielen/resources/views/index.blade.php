@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('content')
    <div class="hero-image">
        <div class="hero-text">
            <h1>Rijschool Vierkante Wielen</h1>
            <div class="menu-buttons-hero">
                <a href="{{ url('gratis-proefrijles') }}"><button class="yellow-button">Gratis proefrijles
                        inplannen</button></a>
            </div>
        </div>
    </div>

    @include('partials.action-bar') {{-- Include the action-bar section --}}

    <div class="text-afbeelding"> {{-- Text + image --}}
        <div class="afbeelding">
            <img src="{{ asset('images/rijles-met-rolstoel.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Veilig en snel leren lessen door heel Noord-Holland</h2>
            <p>Bij Autorijschool Vierkante Wielen wordt u begeleid door een van onze ervaren rijinstructeurs, die zich
                inzetten om u met motivatie en vertrouwen naar uw examen te begeleiden.<br>
            <div id="proefles_contact">Wij streven ernaar om voor iedereen een passende rijervaring te bieden, inclusief
                leerlingen met een handicap. Daarom bieden wij speciale lessen aan, afgestemd op individuele behoeften.
            </div>
            </p>
            <div class="menu-buttons-404">
                <a href="{{ url('gratis-proefrijles') }}"><button class="yellow-button">Proefrijles inplannen</button></a>
            </div>
        </div>
    </div>

    @include('partials.usp') {{-- Include the USP --}}

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
