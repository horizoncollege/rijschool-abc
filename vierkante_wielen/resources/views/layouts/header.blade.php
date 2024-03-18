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
    <div class="background">
        <nav>
            <div class="menubar-mobiel">
                <div class="menu-icon" onclick="toggleMenu()">
                    <i class="material-icons">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </i>
                </div>
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="menu-items">
                <a href="#">Home</a>
                <a href="#">Autorijles bij ons</a>
                <a href="#">Tarieven</a>
                <a href="#">Over ons</a>
                <a href="#">Contact</a>
            </div>
            <div class="menu-buttons">
                <button class="blue-button">Inloggen</button>
                <button class="yellow-button">Aanmelden</button>
            </div>
        </nav>
    </div>
    <div class="banner-afbeelding">
        <img src="{{ asset('images/vierkante-wielen-banner.jpg') }}" alt="Example Image">
    </div>
    <div class="yellow-bar">
        <p>Veilig en vertrouwd de weg op met Autorijschool De Vierkante Wielen!</p>
    </div>
</body>

</html>