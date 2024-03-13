<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Site Title</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.header')

    <div class="container">
        <div class="brick-container">
            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-1">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>

            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-2">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>

            <div class="brick">
                <img src="{{ asset('images/usp.png') }}" alt="USP-3">
                <h2>Gratis proefles</h2>
                <p>Autorijschool de Vierkante Wielen biedt een gratis proefles aan.</p>
            </div>
        </div>
    </div>

    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="https://picsum.photos/500" alt="afbeelding">
        </div>
        <div class="text">
            <h2>Rijles van Alkmaar tot De Rijp</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br>Volutpat blandit aliquam etiam erat velit scelerisque. Felis imperdiet proin fermentum leo vel. Dictumst quisque sagittis purus sit.</p>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>