<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-5xl">Iniciar sesión</h1>
    <p>¿Todavía no tienes cuenta? <a href="{{ route('register') }}" class="text-blue-600">¡Registraté!</a></p>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg form-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />

                <input type="text" id="email" name="email" class=" rounded w-full mt-1 " placeholder="Correo electrónico" required>
                {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Correo electrónico')" />

                <input type="password" id="password" name="password" class="rounded w-full mt-1" placeholder="Contraseña" required>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Ingresar') }}
                </x-primary-button>
            </div>
        </form>
    </div>


</x-guest-layout>
