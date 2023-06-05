<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 80%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Editar Usuario</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalEditUser')">
                    <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="my-3 mx-1 lg:mx-4 flex flex-col justify-center gap-8">
                <form wire:submit.prevent="crearProducto" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="nombre" class="text-sm text-black font-semibold">Nombre</label>
                                <input type="text" id="nombre" autocomplete="off" name="nombre"
                                    wire:model='nombre' value="{{ old('nombre') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Lucía">
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="apellidos" class="text-sm text-black font-semibold">Apellidos</label>
                                <input type="text" id="apellidos" autocomplete="off" name="apellidos"
                                    wire:model='apellidos' value="{{ old('apellidos') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Martín Pérez">
                                <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="dni" class="text-sm text-black font-semibold">Dni</label>
                                <input type="text" id="dni" autocomplete="off" name="dni" wire:model='dni'
                                    value="{{ old('dni') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: 12345678Z">
                                <x-input-error :messages="$errors->get('dni')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="email" class="text-sm text-black font-semibold">Email</label>
                                <input type="text" id="email" autocomplete="off" name="email"
                                    wire:model='email' value="{{ old('email') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: edu@example.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="telefono" class="text-sm text-black font-semibold">Teléfono</label>
                                <input type="text" id="telefono" autocomplete="off" name="telefono"
                                    wire:model='telefono' value="{{ old('telefono') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: 600000000">
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="rol" class="text-sm text-black font-semibold">Rol</label>
                                <select name="rol" id="rol" wire:model='rol'
                                    class="h-3 py-3 pl-2 w-full border-2 text-black border-gray-300  rounded-md">
                                    <option value="cliente" selected>Cliente</option>
                                    <option value="empresa">Empresa</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <x-input-error :messages="$errors->get('rol')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="w-full">
                                <label for="direccion" class="text-sm text-black font-semibold">Dirección</label>
                                <input type="text" id="direccion" autocomplete="off" name="direccion"
                                    wire:model='direccion' value="{{ old('direccion') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: C/ Juego de la Pleota, 19">
                                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="cp" class="text-sm text-black font-semibold">Código Postal</label>
                                <input type="text" id="cp" autocomplete="off" name="cp"
                                    wire:model='cp' value="{{ old('cp') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: 14900">
                                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="ciudad" class="text-sm text-black font-semibold">Ciudad</label>
                                <input type="text" id="ciudad" autocomplete="off" name="ciudad"
                                    wire:model='ciudad' value="{{ old('direccion') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Lucena">
                                <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="provincia" class="text-sm text-black font-semibold">Provincia</label>
                                <input type="text" id="provincia" autocomplete="off" name="provincia"
                                    wire:model='provincia' value="{{ old('provincia') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Córdoba">
                                <x-input-error :messages="$errors->get('provincia')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="pais" class="text-sm text-black font-semibold">País</label>
                                <input type="text" id="pais" autocomplete="off" name="pais"
                                    wire:model='pais' value="{{ old('pais') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Lucena">
                                <x-input-error :messages="$errors->get('pais')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="flex justify-end pt-2 space-x-14">
                        <input wire:click="editUser()" class="px-4 text-center py-3 buttonGeneral cursor-pointer"
                            value="Editar">
                    </div>
                </form>
            </div>
            <!--Footer-->
            {{-- <script>
                window.addEventListener('modalOpen', event => {
                    tinymce.remove('#tinymce1');
                    tinymce.remove('#tinymce2');
                    tinymce.remove('#tinymce3');
                    tinymce.init({
                        selector: '#tinymce1'
                    });
                    tinymce.init({
                        selector: '#tinymce2'
                    });
                    tinymce.init({
                        selector: '#tinymce3'
                    });

                })
            </script> --}}

        </div>
    </div>

</div>
