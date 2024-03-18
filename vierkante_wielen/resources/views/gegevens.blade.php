<!-- gegevens.blade.php -->

@foreach ($gebruikers as $gebruiker)
    Naam: {{ $gebruiker->voornaam }} {{ $gebruiker->achternaam }}<br>
    E-mail: {{ $gebruiker->email }}<br>
    Mobiel: {{ $gebruiker->mobiel }}<br>
    Adres: {{ $gebruiker->adres }}<br>
    Postcode: {{ $gebruiker->postcode }}<br>
    Plaats: {{ $gebruiker->plaats }}<br>
    Opmerkingen: {{ $gebruiker->opmerkingen }}<br><br>
@endforeach
