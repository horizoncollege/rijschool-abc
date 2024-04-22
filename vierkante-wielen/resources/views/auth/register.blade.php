<x-guest-layout>
    <div class="table-text">
        <div class="table-grey-contact">
            <h2>Account aanmaken</h2>
            <div class="contact-form-seperate-left">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name"><br><br>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="phone">Telefoonnummer:</label>
                    <input type="text" id="phone" name="phone"><br><br>

                    <label for="password">Wachtwoord:</label>
                    <input id="password" type="password" name="password" required
                        autocomplete="new-password" /><br><br>

                    <label for="password_confirmation"> Bevestig Wachtwoord: </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" /><br><br>

                    <p>Extra informatie</p><br>

                    <label for="date_of_birth">Geboortedatum:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth"><br><br>

                    <label for="gender">Geslacht:</label>
                    <input type="text" id="gender" name="gender"><br><br>

                    <label for="adres">Adres:</label>
                    <input type="text" id="adres" name="adres"><br><br>

                    <label for="zip_code">Postcode:</label>
                    <input type="text" id="zip_code" name="zip_code"><br><br>

                    <label for="city">Woonplaats:</label>
                    <input type="text" id="city" name="city"><br><br>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Heb je al een account?') }}
                        </a>

                        <x-primary-button
                            style="background-color: #003D86; color: #fff; font-weight: bold; font-size: 16px;"
                            class="ms-4">
                            {{ __('Aanmaken') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
