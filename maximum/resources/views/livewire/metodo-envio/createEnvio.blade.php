<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 54%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Crear Método Envío</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalCreateMetodo')">
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
                        <div class="flex flex-col gap-4">
                            <div class="w-full">
                                <label for="nombre" class="text-sm text-black font-semibold">Nombre</label>
                                <input type="text" id="nombre" autocomplete="off" name="nombre"
                                    wire:model='nombre' value="{{ old('nombre') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Seur, GLS ...">
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                            <div class="w-full">
                                <label for="cargo" class="text-sm text-black font-semibold">Cargo</label>
                                <input type="number" id="cargo" autocomplete="off" name="cargo"
                                    wire:model='cargo' value="{{ old('cargo') }}"
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    min="0.00" step="0.01" value="0">
                                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>
                        <hr>
                    </div>
                    <div class="flex justify-end pt-2 space-x-14">
                        <input wire:click="createMetodoEnvio()" class="px-4 text-center py-3 buttonGeneral cursor-pointer"
                            value="Crear">
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
