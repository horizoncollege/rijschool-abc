<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>404</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
   </head>

@extends('layouts.layout')

@section('title', 'Autorijschool De Vierkante Wielen')

@section('navbar')
    @include('partials.nav') {{-- Include the navbar --}}
@endsection

@section('content')
<div class="flex items-center flex-col justify-center lg:flex-row py-10 px-6 md:px-24 md:py-10 lg:py-16 gap-8 lg:gap-16">
    <div class="w-full lg:w-1/2">
        <img class="hidden lg:block" src="https://i.postimg.cc/1XS4Bth6/Ongetiteld.png" />
        <img class="hidden md:block lg:hidden" src="https://i.postimg.cc/1XS4Bth6/Ongetiteld.png" />
        <img class="md:hidden" src="https://i.postimg.cc/1XS4Bth6/Ongetiteld.png" />
    </div>
    <div class="w-full lg:w-1/2 px-4">
        <h1 class="py-2 lg:py-4 text-3xl lg:text-4xl font-extrabold text-gray-800 dark:text-black">Ben je de weg kwijt?🤔</h1>
        <p class="py-2 text-base text-gray-800 dark:text-black">De inhoud die je zoekt, bestaat niet. Het is ofwel verwijderd, of je hebt de link verkeerd getypt.</p>
        <p class="py-2 text-base text-gray-800 dark:text-black">Sorry daarvoor! Bezoek alstublieft onze homepage om te komen waar je moet zijn.</p>
        <div class="menu-buttons-404">
            <a href="{{ url('') }}"><button class="blue-button-404">Terug naar de homepage</button></a>
            <a href="{{ url('contact') }}"><button class="yellow-button">Neem contact op</button></a>
        </div>
    </div>
  </div>


  {{-- <div class="text-afbeelding">
    <div class="afbeelding">
        <img src="https://i.postimg.cc/1XS4Bth6/Ongetiteld.png" alt="afbeelding">
    </div>
    <div class="text">
        <h2>Ben je de weg kwijt?🤔</h2>
        <p>De inhoud die je zoekt, bestaat niet. Het is ofwel verwijderd, of je hebt de link verkeerd getypt.</p>
    </div>
</div> --}}
@endsection

@section('footer')
    @include('partials.footer') {{-- Include the footer --}}
@endsection
