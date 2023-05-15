<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Dirección de facturación') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Actualice la dirección de facturación que utilizará para sus pedidos.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.address') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="">
            <div>
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', auth()->user()->direccion)"
                    required autofocus autocomplete="direccion" />
                <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
            </div>
        </div>
        <div class="grid grid-cols-2 gap-5">
            <div>
                <x-input-label for="cp" :value="__('Código Postal')" />
                <x-text-input id="cp" name="cp" type="text" class="mt-1 block w-full" :value="old('cp', auth()->user()->cp)"
                    autofocus autocomplete="cp" />
                <x-input-error class="mt-2" :messages="$errors->get('cp')" />
            </div>
            <div>
                <x-input-label for="ciudad" :value="__('Ciudad')" />
                <x-text-input id="ciudad" name="ciudad" type="text" class="mt-1 block w-full"
                    :value="old('ciudad', auth()->user()->ciudad)" autofocus autocomplete="ciudad" />
                <x-input-error class="mt-2" :messages="$errors->get('ciudad')" />
            </div>

        </div>

        <div class="grid grid-cols-2 gap-5">
            <div>
                <x-input-label for="provincia" :value="__('Provincia')" />
                <x-text-input id="provincia" name="provincia" type="text" class="mt-1 block w-full" :value="old('provincia', auth()->user()->provincia)"
                    autofocus autocomplete="provincia" />
                <x-input-error class="mt-2" :messages="$errors->get('provincia')" />
            </div>
            <div>
                <x-input-label for="pais" :value="__('País')" />
                <x-text-input id="pais" name="pais" type="text" class="mt-1 block w-full"
                    :value="old('pais', auth()->user()->pais)" autofocus autocomplete="pais" />
                <x-input-error class="mt-2" :messages="$errors->get('pais')" />
            </div>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Actualizar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Actualizado.') }}</p>
            @endif
        </div>
    </form>
</section>
