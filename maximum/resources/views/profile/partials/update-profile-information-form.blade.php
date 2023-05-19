<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información de tu perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Actualice la información de perfil y la dirección de correo electrónico de su cuenta.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="flex">
            <img class="mt-2 rounded-full w-24 h-24 sm:w-28 sm:h-28" src="{{ 'storage/' . auth()->user()->ruta_imagen }}">
            <div class="py-8 mt-auto">
                <div class="file-input flex items-center">
                    <div class="flex items-center">
                        <!-- File Input -->
                        <div class="ml-5 rounded-md shadow-sm">
                            <!-- Replace the file input styles with our own via the label -->
                            <input type="file" name="imagen" id="imagen" class="custom">
                            <label for="imagen"
                                class="mb-0 py-3 px-4 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-indigo-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                                Cargar foto
                            </label>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <p class="text-sm text-gray-400">Selecciona una nueva imagen de perfil y presione "Actualizar" para aplicar
            los cambios.</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', auth()->user()->nombre)"
                    required autofocus autocomplete="nombre" />
                <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
            </div>

            <div>
                <x-input-label for="apellidos" :value="__('Apellidos')" />
                <x-text-input id="apellidos" name="apellidos" type="text" class="mt-1 block w-full" :value="old('apellidos', auth()->user()->apellidos)"
                    autofocus autocomplete="apellidos" />
                <x-input-error class="mt-2" :messages="$errors->get('apellidos')" />
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div>
                <x-input-label for="dni" :value="__('Dni')" />
                <x-text-input id="dni" name="dni" type="text" class="mt-1 block w-full" :value="old('dni', auth()->user()->dni)"
                    autofocus autocomplete="dni" />
                <x-input-error class="mt-2" :messages="$errors->get('dni')" />
            </div>
            <div>
                <x-input-label for="fecha_nacimiento" :value="__('Fecha nacimiento')" />
                <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="mt-1 block w-full"
                    :value="old('fecha_nacimiento', auth()->user()->fecha_nacimiento)" autofocus autocomplete="fecha_nacimiento" />
                <x-input-error class="mt-2" :messages="$errors->get('fecha_nacimiento')" />
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', auth()->user()->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
            <div>
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input id="telefono" name="telefono" type="tel" class="mt-1 block w-full"
                    :value="old('telefono', auth()->user()->telefono)" autofocus autocomplete="telefono" />
                <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
            </div>


            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">

            <x-primary-button>{{ __('Actualizar') }}</x-primary-button>
            @if (session('status') === 'profile-updated-1')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Actualizado.') }}</p>
            @endif
        </div>
    </form>
</section>
