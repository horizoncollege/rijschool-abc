<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>Contactenlijst</h1>

    <ul>
        @foreach ($contacts as $contact)
            <li><a href="{{ route('dashboard.contact.show', $contact->id) }}">{{ $contact->name }}</a></li>
        @endforeach
    </ul>

</x-app-layout>
