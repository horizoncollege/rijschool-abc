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
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td><b>Geboortedatum:</b></td>
                                <td>{{ Auth::user()->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td><b>Geslacht:</b></td>
                                <td>{{ Auth::user()->gender }}</td>
                            </tr>
                            <tr>
                                <td><b>Adres:</b></td>
                                <td>{{ Auth::user()->adres }}</td>
                            </tr>
                            <tr>
                                <td><b>Postcode:</b></td>
                                <td>{{ Auth::user()->zip_code }}</td>
                            </tr>
                            <tr>
                                <td><b>Woonplaats:</b></td>
                                <td>{{ Auth::user()->city }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Checks if the logged in user has Admin permissions. If not, the button won't show --}}
                @if (Auth::user()->hasRole('Admin'))
                    <div class="menu-buttons-404" style="margin-top: 5px;">
                        <a href="{{ url('instructors-create') }}"><button class="yellow-button">Rijinstructeur
                                Toevoegen</button></a>
                    </div>
                @endif
            </div>

            {{-- Checks if the logged in user has Admin permissions. If not, the column won't show --}}
            @if (Auth::user()->hasRole('Admin'))
                <div class="table-grey">
                    <h2>Rijinstructeurs</h2>
                    <div class="table-grey-content">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->hasRole('Rijinstructeur'))
                                        <tr>
                                            <td><b>{{ $user->name }}</b></td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="table-grey">
                    <h2>Leerlingen</h2>
                    <div class="table-grey-content">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->hasRole('Leerling'))
                                        <tr>
                                            <td><b>{{ $user->name }}</b></td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            {{-- Checks if the logged in user has Leerling permissions. If not, the button won't show --}}
            @if (Auth::user()->hasRole('Leerling'))
                <div class="table-grey">
                    <h2>Rijinstructeurs</h2>
                    <div class="table-grey-content">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->hasRole('Rijinstructeur'))
                                        <tr>
                                            <td><b>{{ $user->name }}</b></td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            {{-- Checks if the logged in user has Rijinstructeur permissions. If not, the button won't show --}}
            @if (Auth::user()->hasRole('Rijinstructeur'))
                <div class="table-grey">
                    <h2>Leerlingen</h2>
                    <div class="table-grey-content">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                    @if ($user->hasRole('Leerling'))
                                        <tr>
                                            <td><b>{{ $user->name }}</b></td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

@include('partials.dashboard-agenda') {{-- Include the Agenda --}}
