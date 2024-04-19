<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="table-text">
        <div class="table-grey-contact">
            <div class="contact-form-seperate-left">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="password">Wachtwoord:</label>
                    <input id="password" type="password" name="password" required
                        autocomplete="new-password" /><br><br>

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Wachtwoord onthouden') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Wachtwoord vergeten?') }}
                            </a>
                        @endif

                        <x-primary-button
                            style="background-color: #003D86; color: #fff; font-weight: bold; font-size: 16px;"
                            class="ms-3">
                            {{ __('Inloggen') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
