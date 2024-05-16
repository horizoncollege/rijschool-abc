<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content">
        <div class="table-text">
            <div class="table-grey-contact">
                <h2>Ziekmelden</h2>

                @if ($bookings->isEmpty())
                    <p>Je hebt momenteel geen rijlessen ingepland.</p>
                @else
                    @foreach ($bookings as $booking)
                        <div class="contact-grid">
                            <div class="table-grey-contact-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><b>Title</b></td>
                                            <td>{{ $booking->title }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Datum</b></td>
                                            <td>{{ $booking->start_date }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Auto type</b></td>
                                            <td>{{ $booking->auto_type }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Opmerking</b></td>
                                            <td>{{ $booking->opmerking }}</td>
                                        </tr>
                                        <tr>
                                            <td class="action-cell">
                                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="menu-buttons-404">
                                                        <button class="yellow-button">Ziekmelden</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
