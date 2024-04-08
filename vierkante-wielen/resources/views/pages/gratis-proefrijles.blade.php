@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('content')
    <div class="hero-image">
        <div class="hero-text">
            <h1>Gratis proefrijles</h1>
            <div class="menu-buttons-hero">
                <button class="yellow-button" onclick="scrollToContactForm()">Contact opnemen</button>
            </div>
        </div>
    </div>

    @include('partials.action-bar') {{-- Include the action-bar section --}}

    <div class="text-afbeelding-grey"> {{-- Text + image --}}
        <div class="afbeelding">
            <img src="{{ asset('images/autorijles-bij-ons.jpg') }}" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Plan een gratis proefrijles in van 1 uur!</h2>
            <p>Tijdens een proefrijles maak je kennis met onze rijschool. Daarnaast krijg je ook inzicht in welk lespakket
                het best bij jou past!<br>
                <div id="proefles_contact">Nieuwsgierig? Vul dan ons <a href="javascript:void(0)" onclick="scrollToContactForm()">contactformulier</a>
                    in en wij nemen zo snel mogelijk contact met je op om een afspraak te maken.</div>
            </p>
        </div>
    </div>

    @include('partials.contact-form-seperate') {{-- Include the contact form --}}
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
