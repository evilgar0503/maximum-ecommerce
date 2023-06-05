<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 80%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Editar Producto</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalEdit')">
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
                        <div class="">
                            <label for="nombre" class="text-sm text-black font-semibold">Nombre</label>


                            <input type="text" id="nombre" name="nombre" wire:model='nombre'
                                class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                placeholder="Nombre producto...">

                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />


                        </div>
                        <div class="">
                            <label for="descripcion" class="text-sm text-black font-semibold">Descripcion</label>
                            <textarea id="tinymce1" rows="4" name="descripcion" wire:model='descripcion'
                                class="py-3 pl-2 w-full text-xs border-2 border-gray-300 rounded-md" placeholder="Descripción del producto...">{{ $producto->descripcion }}</textarea>
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>
                        <hr>
                        <div class="">
                            <label for="ingredientes" class="text-sm text-black font-semibold">Ingredientes</label>
                            <textarea id="tinymce2" rows="4" name="ingredientes" wire:model='ingredientes'
                                class="py-3 pl-2 w-full text-xs border-2 border-gray-300 rounded-md" placeholder="Ingredientes del producto...">{{ $producto->ingredientes }}</textarea>
                            <x-input-error :messages="$errors->get('ingredientes')" class="mt-2" />

                        </div>
                        <hr>

                        <div class="">
                            <label for="instrucciones" class="text-sm text-black font-semibold">Instrucciones</label>
                            <textarea id="tinymce3" rows="4" name="instrucciones" wire:model='instrucciones'
                                class="py-3 pl-2 w-full text-xs border-2 border-gray-300 rounded-md" placeholder="Instrucciones del producto...">{{ $producto->instrucciones }}</textarea>
                            <x-input-error :messages="$errors->get('instrucciones')" class="mt-2" />

                        </div>
                        <hr>
                        <div class="flex flex-row gap-4">
                            <div class="w-1/2">
                                <label for="marca" class="text-sm text-black font-semibold">Marca</label>
                                <input type="text" id="marca" autocomplete="off" name="marca"
                                    wire:model='marca' value="{{ $producto->marca }}"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md"
                                    placeholder="Marca del producto...">
                                <x-input-error :messages="$errors->get('marca')" class="mt-2" />


                            </div>
                            <div class="w-1/2">
                                <label for="sabor" class="text-sm text-black font-semibold">Sabor</label>
                                <input type="text" id="sabor" autocomplete="off" name="sabor"
                                    wire:model='sabor' value="{{ $producto->sabor }}"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md"
                                    placeholder="Sabor del producto...">
                                <x-input-error :messages="$errors->get('sabor')" class="mt-2" />

                            </div>
                        </div>
                        <div class="flex flex-row gap-4">
                            <div class="w-1/2">
                                <label for="edad" class="text-sm text-black font-semibold">Edad</label>
                                <input type="text" id="edad" autocomplete="off" name="edad" wire:model='edad'
                                    value="{{ $producto->edad }}"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md"
                                    placeholder="Edad...">
                                <x-input-error :messages="$errors->get('edad')" class="mt-2" />


                            </div>
                            <div class="w-1/2">
                                <label for="peso" class="text-sm text-black font-semibold">Peso</label>
                                <input type="text" id="peso" autocomplete="off" name="peso"
                                    wire:model='peso' value="{{ $producto->peso }}"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md"
                                    placeholder="Sabor del producto...">
                                <x-input-error :messages="$errors->get('peso')" class="mt-2" />

                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div>
                                <label for="precio" class="text-sm text-black font-semibold">Precio</label>
                                <input type="number" min="0.00" step="0.01" id="precio"
                                    autocomplete="off" name="precio" value="{{ $producto->precio }}"
                                    wire:model='precio'
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md">
                                <x-input-error :messages="$errors->get('precio')" class="mt-2" />


                            </div>
                            <div>
                                <label for="precio_empresa" class="text-sm text-black font-semibold">Precio
                                    Empresa</label>
                                <input type="number" value="{{ $producto->precio_empresa }}" min="0.00"
                                    wire:model='precio_empresa' step="0.01" id="precio_empresa"
                                    autocomplete="off" name="precio_empresa"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md">
                                <x-input-error :messages="$errors->get('precio_empresa')" class="mt-2" />

                            </div>
                            <div>
                                <label for="precio_descuento" class="text-sm text-black font-semibold">Precio
                                    Descuento</label>
                                <input type="number" value="{{ $producto->precio_descuento }}" min="0.00"
                                    wire:model='precio_descuento' value="0.00" id="precio_descuento"
                                    autocomplete="off" name="precio_descuento"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md">
                                <x-input-error :messages="$errors->get('precio_descuento')" class="mt-2" />

                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="stock" class="text-sm text-black font-semibold">Stock</label>
                                <input type="number" min="0" step="1" id="stock"
                                    wire:model='stock' autocomplete="off" name="stock"
                                    value="{{ $producto->stock }}"
                                    class="h-3 py-3 pl-2 w-full border-2 text-xs border-gray-300  rounded-md">
                                <x-input-error :messages="$errors->get('stock')" class="mt-2" />


                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="estado" class="text-sm text-black font-semibold">Estado</label>
                                <select name="estado_producto" id="estado_producto" wire:model='estado'
                                    class="h-3 py-3 pl-2 w-full border-2 text-x text-black border-gray-300  rounded-md">
                                    <option value="activo" @if ($producto->estado == 'activo') ? 'selected' : '' @endif>
                                        Activo</option>
                                    <option value="desactivado"
                                        @if ($producto->estado == 'desactivado') ? 'selected' : '' @endif>Desactivado
                                    </option>
                                </select>
                                <x-input-error :messages="$errors->get('estado_producto')" class="mt-2" />

                            </div>
                        </div>
                        <hr>
                        <div class="w-full">
                            <label for="imagen" class="text-sm text-black font-semibold">Imagen</label>

                            <div
                                class=" flex flex-col lg:flex-row justify-betweenpy-3 pl-2 w-full border-2 text-xs border-gray-300 rounded-md items-center">
                                <div class="w-full lg:w-3/4">
                                    <input type="file" id="imagen" name="imagen" wire:model='imagen'>
                                    <x-input-error :messages="$errors->get('imagen')" class="mt-2" />

                                </div>
                                <div class="w-full lg:w-1/4">
                                    <img src="/{{ $producto->ruta_imagen }}" class="w-24">
                                </div>
                            </div>
                            <p class="text-red-500 text-xs">Foto actual: {{ $producto->ruta_imagen }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end pt-2 space-x-14">
                        <input wire:click="editProduct()" class="px-4 text-center py-3 buttonGeneral cursor-pointer"
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
