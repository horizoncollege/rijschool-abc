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
            <img src="{{ asset('images/rijles-met-rolstoel.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Veilig en snel leren lessen door heel Noord-Holland</h2>
            <p>Bij Autorijschool Vierkante Wielen wordt u begeleid door een van onze ervaren rijinstructeurs, die zich
                inzetten om u met motivatie en vertrouwen naar uw examen te begeleiden.<br><br>Wij streven ernaar om voor
                iedereen een passende rijervaring te bieden, inclusief leerlingen met een handicap. Daarom bieden wij
                speciale lessen aan, afgestemd op individuele behoeften.</p>
            <div class="menu-buttons-404">
                <a href="{{ url('register') }}"><button class="yellow-button">Meld je aan</button></a>
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


{{-- Test --}}
