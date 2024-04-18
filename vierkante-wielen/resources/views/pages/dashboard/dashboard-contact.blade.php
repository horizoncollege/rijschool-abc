<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content">
        <div class="table-text">
            <div class="table-grey-contact">
                <h2>Ingevulde contactformulieren</h2>
                @if($contacts->isEmpty())
                    <p>Er zijn momenteel geen ingevulde contactformulieren.</p>
                @else
                    @foreach ($contacts as $contact)
                        <div class="contact-grid">
                            <div class="table-grey-contact-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td>{{ $contact->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>E-mail</b></td>
                                            <td>{{ $contact->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Bericht</b></td>
                                            <td>{{ $contact->message }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Datum</b></td>
                                            <td>{{ $contact->created_at->addHours(2)->format('d-m-Y H:i:s') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="action-cell">
                                                <form method="POST" action="{{ route('contact.delete', $contact->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Verwijderen</button>
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
