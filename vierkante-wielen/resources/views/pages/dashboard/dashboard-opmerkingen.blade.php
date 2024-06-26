<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content">
        <div class="table-text">
            <div class="table-grey-contact">
                <h2>Jouw opmerkingen</h2>

                @if (
                    $bookings->isEmpty() ||
                        $bookings->filter(function ($booking) {
                                return $booking->opmerking != null;
                            })->isEmpty())
                    <p>Je hebt momenteel geen opmerkingen toegevoegd.</p>
                @else
                    @foreach ($bookings as $booking)
                        @if ($booking->opmerking != null)
                            <div class="contact-grid">
                                <div class="table-grey-contact-content">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><b>Datum</b></td>
                                                <td>{{ $booking->start_date }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Opmerking</b></td>
                                                <td>{{ $booking->opmerking }}</td>
                                            </tr>
                                            <tr>
                                                <td class="action-cell">
                                                    <form action="{{ route('booking.clearOpmerkingen', $booking->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="menu-buttons-404">
                                                            <button class="yellow-button">Verwijderen</button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
