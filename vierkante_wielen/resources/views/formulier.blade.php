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
    <style>
        form {
            display: grid;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid transparent;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }

        button[type="submit"] {
            padding: 5px 15px;
            border: 5px solid transparent;
            border-radius: 5px;
            font-size: 16px;
            background-color: #003D86;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #001f4d;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <div class="text-afbeelding">
        <div class="afbeelding">
            <img src="https://picsum.photos/500" alt="afbeelding">
        </div>

        <div class="text">
            <h2>Meld je aan!</h2>
            <form method="POST" action="{{ route('opslaan') }}">
                @csrf
                <input type="text" name="voornaam" placeholder="Voornaam"><br>
                <input type="text" name="achternaam" placeholder="Achternaam"><br>
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="text" name="mobiel" placeholder="Mobiel"><br>
                <input type="text" name="plaats" placeholder="Plaats"><br>
                <input type="text" name="postcode" placeholder="Postcode"><br>
                <input type="text" name="adres" placeholder="Adres"><br>
                <textarea name="opmerkingen" placeholder="Opmerkingen"></textarea><br>
                <button type="submit">Verzenden</button>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
