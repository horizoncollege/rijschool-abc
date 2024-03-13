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

    <nav>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class="material-icons">☰</i>
            <!-- Use an appropriate icon library, here using Material Icons as an example -->
        </div>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <!-- Replace 'your-logo.png' with the path to your logo image -->
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

    <div class="banner-afbeelding">
        <img src="{{ asset('images/vierkante-wielen-banner.jpg') }}" alt="Example Image">
    </div>
    <div class="yellow-bar">
        <p>Veilig en vertrouwd de weg op met Autorijschool De Vierkante Wielen!</p>
    </div>

    <script>
        function toggleMenu() {
            const menuItems = document.querySelector('.menu-items');
            menuItems.classList.toggle('show');
            const buttons = document.querySelector('.menu-buttons');
            buttons.style.display = buttons.style.display === 'none' ? 'flex' : 'none';
        }
    </script>

</body>

</html>
