<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 80%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Productos</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalProductos')">
                    <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 80%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Productos</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalProductos')">
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
                <table class="w-full text-sm text-left  my-4 rounded">
                    <thead class="text-xs uppercase text-white" style="background-color: #212121;">
                        <tr>
                            <th scope="col" class="px-6 py-3">Id</th>
                            <th scope="col" class="px-6 py-3"></th>
                            <th scope="col" class="px-6 py-3">Nombre</th>
                            <th scope="col" class="px-6 py-3">Marca</th>
                            <th scope="col" class="px-6 py-3">Precio</th>
                            <th scope="col" class="px-6 py-3">Precio Empresa</th>
                            <th scope="col" class="px-6 py-3">Stock</th>
                            <th scope="col" class="px-6 py-3">Estado</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productosDisponibles as $producto)
                            <tr class=" border-b  border-neutral-500 hover:bg-neutral-200">
                                <td class="w-4 p-2">
                                    <div class="flex items-center justify-center">
                                        {{ $producto->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-2">
                                    <img src="/{{ $producto->ruta_imagen }}" class="w-16 rounded">
                                </td>
                                <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                                    {{ $producto->nombre }}
                                </th>
                                <td class="px-6 py-2">
                                    {{ $producto->marca }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $producto->precio }}€
                                </td>
                                <td class="px-6 py-2">
                                    {{ $producto->precio_empresa }}€
                                </td>
                                <td class="px-6 py-2">
                                    {{ $producto->stock }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $producto->estado }}
                                </td>
                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <a href="#" wire:click="edit({{ $producto->id }})"
                                        class="font-medium  text-blue-600 hover:no-underline">Editar</a>
                                    <a href="#" wire:click="delete({{ $producto->id }})"
                                        class="font-medium  text-red-600 hover:no-underline hover:text-red-700">Eliminar
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>


        </div>
    </div>

</div>
