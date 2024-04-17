<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content">
        <div class="table-text">
            <div class="table-grey-contact">
                <h2>Instructeur toevoegen</h2>
                <div class="contact-form-seperate-left">
                    <form method="POST" action="{{ route('instructors.store') }}">
                        @csrf
                        <label for="name">Naam:</label>
                        <input type="text" id="name" name="name"><br><br>

                        <label for="adres">Adres:</label>
                        <input type="text" id="adres" name="adres"><br><br>

                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email"><br><br>

                        <label for="phone">Telefoonnummer:</label>
                        <input type="text" id="phone" name="phone"><br><br>

                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password"><br><br>

                        <div class="menu-buttons-404">
                            <button class="yellow-button">Aanmaken</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
