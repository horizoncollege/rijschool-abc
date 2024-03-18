<!-- formulier.blade.php -->

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
