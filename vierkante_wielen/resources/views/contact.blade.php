<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorijschool De Vierkante Wielen</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
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
   
    @include('layouts.footer')

</body>

</html>