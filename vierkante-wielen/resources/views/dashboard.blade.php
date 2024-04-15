<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="content">
        <div class="table-text">
            <div class="table-grey">
                <h2>Jouw gegevens</h2>
                <div class="table-grey-content">
                    <table>
                        <tbody>
                            <tr>
                                <td><b>Naam:</b></td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td><b>E-mail:</b></td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td><b>Telefoonnummer:</b></td>
                                <td>06 12 34 56 78</td>
                            </tr>
                            <tr>
                                <td><b>Geboortedatum:</b></td>
                                <td>28-02-2006</td>
                            </tr>
                            <tr>
                                <td><b>Geslacht:</b></td>
                                <td>Man</td>
                            </tr>
                            <tr>
                                <td><b>Adres:</b></td>
                                <td>Westerweg 26</td>
                            </tr>
                            <tr>
                                <td><b>Postcode:</b></td>
                                <td>1906 EE</td>
                            </tr>
                            <tr>
                                <td><b>Woonplaats:</b></td>
                                <td>Limmen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ url('dashboard-gegevens-aanpassen') }}"><button class="b-form" type="submit">Gegevens
                        aanpassen</button></a>
            </div>

            <div class="table-grey">
                <h2>Recente rijlessen</h2>
                <div class="table-grey-content">
                    <table>
                        <tbody>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>8-3-2024 om 13:00 uur</td>
                            </tr>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>7-3-2024 om 14:30 uur</td>
                            </tr>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>6-3-2024 om 12:45 uur</td>
                            </tr>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>5-3-2024 om 13:00 uur</td>
                            </tr>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>4-3-2024 om 14:30 uur</td>
                            </tr>
                            <tr>
                                <td><b>{{ Auth::user()->name }}</b></td>
                                <td>3-3-2024 om 12:45 uur</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <div class="dashboard-section">
        <h2>Rijinstructeurs Beheren</h2>
        <p>Als admin kunt u hier rijinstructeurs toevoegen en beheren.</p>
        <a href="{{ route('instructors.create') }}" class="btn btn-primary">Rijinstructeur Toevoegen</a>
    </div> --}}

@include('partials.dashboard-agenda') {{-- Include the footer --}}
