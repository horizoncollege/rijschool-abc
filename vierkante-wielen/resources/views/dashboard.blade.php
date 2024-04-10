<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="table-text">
        <div class="table">
            <h2>Recente rijlessen</h2>
            <table>
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">Voorbeeldlink 1</a></td>
                        <td>1-3-2024 om 13:00 uur</td>
                    </tr>
                    <tr>
                        <td><a href="#">Voorbeeldlink 2</a></td>
                        <td>2-3-2024 om 14:30 uur</td>
                    </tr>
                    <tr>
                        <td><a href="#">Voorbeeldlink 3</a></td>
                        <td>3-3-2024 om 12:45 uur</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text">
            <h2>Jouw gegevens</h2>
            <p>Hier kunnen jouw gegevens worden weergegeven.</p>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Welkom (Gebruiker)') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
