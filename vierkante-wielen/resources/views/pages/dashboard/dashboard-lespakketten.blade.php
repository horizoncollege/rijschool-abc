<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900">
                    {{ __("Welkom (Gebruiker)") }}
                </div>
                 --}}
                 <div class="lespakketten">
                    <h1>Lespakketten</h1>
                    <div class="brick-container-tarieven"> {{-- Container for tarieven/lespakketten  --}}
                        <div class="brick-tarieven"> {{-- Lespakket 1 --}}
                            <div class="brick-tarieven-img">
                            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1"></div>
                            <h2>Proefles van 60 minuten</h2>
                            <h3>1399,-</h3>
                            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
                            <ul class="list-check">
                                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li>
                                <br>
                                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen
                                    voor
                                    het praktijkexamen.</li><br>
                                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                                    proefles, waarbij de proefles
                                    gratis is.</li><br>
                                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt
                                    er
                                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                                </div>
                            </ul>
                        </div>
                        <div class="brick-tarieven"> {{-- Lespakket 1 --}}
                            <div class="brick-tarieven-img">
                            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1"></div>
                            <h2>Proefles van 60 minuten</h2>
                            <h3>1399,-</h3>
                            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
                            <ul class="list-check">
                                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li>
                                <br>
                                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen
                                    voor
                                    het praktijkexamen.</li><br>
                                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                                    proefles, waarbij de proefles
                                    gratis is.</li><br>
                                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt
                                    er
                                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                                </div>
                            </ul>
                        </div>
                        <div class="brick-tarieven"> {{-- Lespakket 1 --}}
                            <div class="brick-tarieven-img">
                            <img src="{{ asset('images/USP-car.png') }}" alt="USP-1"></div>
                            <h2>Proefles van 60 minuten</h2>
                            <h3>1399,-</h3>
                            <p>Autorijschool de Vierkante Wielen biedt een gratis proefles van 60 minuten aan.</p>
                            <ul class="list-check">
                                <li>Kennismaking en uitleg over hoe een rijles verloopt.</li><br>
                                <li>Mogelijkheid voor de leerling om zelf een rondje te rijden, vaak op een rustig oefenterrein.</li>
                                <br>
                                <li>Evaluatie aan het einde van de proefles om een inschatting te maken van het aantal benodigde lessen
                                    voor
                                    het praktijkexamen.</li><br>
                                <li>Aanbieding van een passend lespakket inclusief examens bij Autorijschool Vierkante Wielen na de
                                    proefles, waarbij de proefles
                                    gratis is.</li><br>
                                <li>In het geval dat de leerling besluit niet bij Autorijschool Vierkante Wielen te gaan lessen, wordt
                                    er
                                    een bedrag van 50 in rekening gebracht voor de proefles.</li><br>
                                <div class="menu-buttons-tarieven"> {{-- button to sign up  --}}
                                    <a href="{{ url('register') }}"><button class="yellow-button">Bestellen</button></a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>
