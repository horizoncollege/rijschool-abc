<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>Contactenlijst</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Form Results</h1>
                @foreach ($contacts as $contact)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{ $contact->name }}</h5>
                            <p class="card-text">Email: {{ $contact->email }}</p>
                            <p class="card-text">Message: {{ $contact->message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
