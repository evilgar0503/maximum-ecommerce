<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-8 lg:my-16 bg-white max-h-full  mx-4 lg:mx-auto w-full lg:w-9/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: fit-content">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Crear Pedido</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalCreatePedido')">
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

                <div class="w-full lg:w-1/3">
                    <label for="usuario" class="text-sm text-black font-semibold">Usuario</label>
                    <p class="text-xs text-gray-400">*Selecciona un usuario para continuar.</p>
                    <input type="text" wire:model='buscadorUser'
                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                        placeholder="Busca un usuario">

                    @if (!empty($usuarios))
                        <ul class="absolute bg-white border border-gray-400 shadow-lg text-xs rounded">
                            @foreach ($usuarios as $user)
                                <li class="border-bottom border-gray-400 px-2 py-1.5 font-light hover:bg-neutral-300 hover:cursor-pointer"
                                    wire:click='anadirUser({{ $user->id }})'>{{ $user->nombre }}
                                    {{ $user->apellidos }} <span class="text-gray-600 text-xs">
                                        < {{ $user->email }}>
                                    </span></li>
                            @endforeach
                        </ul>
                    @endif

                </div>
                <hr>
                @if (!empty($userSeleccionado))
                    <div class="flex flex-col gap-4">
                        <h1 class="font-bold text-sm">Información de envio</h1>

                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/3">
                                <label for="nombre_env" class="text-sm text-black font-semibold">Nombre</label>
                                <input type="text" wire:model='nombre_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Lucía">
                                <x-input-error :messages="$errors->get('nombre_env')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/3">
                                <label for="apellidos_env" class="text-sm text-black font-semibold">Apellidos</label>
                                <input type="text" wire:model='apellidos_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Martín Pérez">
                                <x-input-error :messages="$errors->get('apellidos_env')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/3">
                                <label for="dni_env" class="text-sm text-black font-semibold">Dni</label>
                                <input type="text" wire:model='dni_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: 12345678Z">
                                <x-input-error :messages="$errors->get('dni_env')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <div class="w-full">
                                <label for="direccion_env" class="text-sm text-black font-semibold">Dirección</label>
                                <input type="text" wire:model='direccion_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: C/ Mayor, 1">
                                <x-input-error :messages="$errors->get('direccion_env')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="cp_env" class="text-sm text-black font-semibold">Código Postal</label>
                                <input type="text" wire:model='cp_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: 14001">
                                <x-input-error :messages="$errors->get('cp_env')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="ciudad_env" class="text-sm text-black font-semibold">Ciudad</label>
                                <input type="text" wire:model='ciudad_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Córdoba">
                                <x-input-error :messages="$errors->get('ciudad_env')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="provincia_env" class="text-sm text-black font-semibold">Provincia</label>
                                <input type="text" wire:model='provincia_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: Córdoba">
                                <x-input-error :messages="$errors->get('provincia_env')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="pais_env" class="text-sm text-black font-semibold">País</label>
                                <input type="text" wire:model='pais_env'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                    placeholder="Ej: España">
                                <x-input-error :messages="$errors->get('pais_env')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-row gap-4">
                            <input type="checkbox" class="text-xs shadow-xl border border-amber-400 p-1 text-amber-500"
                                wire:model='sameData'>
                            <p class="text-xs">Mi dirección de facturación es la misma que mi dirección de envio.</p>
                        </div>
                        <hr>
                        @if (!$sameData)
                            <h1 class="font-bold text-sm">Información de facturacion</h1>

                            <div class="flex flex-col lg:flex-row gap-4">
                                <div class="w-full lg:w-1/3">
                                    <label for="nombre_fac" class="text-sm text-black font-semibold">Nombre</label>
                                    <input type="text" wire:model='nombre_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: Lucía">
                                    <x-input-error :messages="$errors->get('nombre_fac')" class="mt-2" />
                                </div>
                                <div class="w-full lg:w-1/3">
                                    <label for="apellidos_fac"
                                        class="text-sm text-black font-semibold">Apellidos</label>
                                    <input type="text" wire:model='apellidos_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: Martín Pérez">
                                    <x-input-error :messages="$errors->get('apellidos_fac')" class="mt-2" />
                                </div>
                                <div class="w-full lg:w-1/3">
                                    <label for="dni_fac" class="text-sm text-black font-semibold">Dni</label>
                                    <input type="text" wire:model='dni_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: 12345678Z">
                                    <x-input-error :messages="$errors->get('dni_fac')" class="mt-2" />
                                </div>
                            </div>
                            <div>
                                <div class="w-full">
                                    <label for="direccion_fac"
                                        class="text-sm text-black font-semibold">Dirección</label>
                                    <input type="text" wire:model='direccion_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: C/ Mayor, 1">
                                    <x-input-error :messages="$errors->get('direccion_fac')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row gap-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="cp_fac" class="text-sm text-black font-semibold">Código
                                        Postal</label>
                                    <input type="text" wire:model='cp_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: 14001">
                                    <x-input-error :messages="$errors->get('cp_fac')" class="mt-2" />
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <label for="ciudad_fac" class="text-sm text-black font-semibold">Ciudad</label>
                                    <input type="text" wire:model='ciudad_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: Córdoba">
                                    <x-input-error :messages="$errors->get('ciudad_fac')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row gap-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="provincia_fac"
                                        class="text-sm text-black font-semibold">Provincia</label>
                                    <input type="text" wire:model='provincia_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: Córdoba">
                                    <x-input-error :messages="$errors->get('provincia_fac')" class="mt-2" />
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <label for="pais_fac" class="text-sm text-black font-semibold">País</label>
                                    <input type="text" wire:model='pais_fac'
                                        class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"
                                        placeholder="Ej: España">
                                    <x-input-error :messages="$errors->get('pais_fac')" class="mt-2" />
                                </div>
                            </div>
                            <hr>
                        @endif
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="metodo_envio" class="text-sm text-black font-semibold">Método
                                    Envío</label>
                                <select wire:model='metodo_envio'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md">
                                    @foreach ($metodosEnvio as $metodoEnvio)
                                        <option value="{{ $metodoEnvio->id }}">{{ $metodoEnvio->nombre }} -
                                            {{ $metodoEnvio->cargo }}€</option>
                                    @endforeach
                                </select>

                                <x-input-error :messages="$errors->get('metodo_envio')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="metodo_pago" class="text-sm text-black font-semibold">Método Págo</label>
                                <select wire:model='metodo_pago'
                                    class="h-3 py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md">
                                    @foreach ($metodosPago as $metodoPago)
                                        <option value="{{ $metodoPago->id }}">{{ $metodoPago->nombre }}</option>
                                    @endforeach
                                </select>

                                <x-input-error :messages="$errors->get('metodo_pago')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full lg:w-1/2">
                                <label for="nota_cliente" class="text-sm text-black font-semibold">Nota
                                    Cliente</label>
                                <textarea wire:model="nota_cliente" rows="5"
                                    class="py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"></textarea>

                                <x-input-error :messages="$errors->get('nota_cliente')" class="mt-2" />
                            </div>
                            <div class="w-full lg:w-1/2">
                                <label for="nota_empresa" class="text-sm text-black font-semibold">Nota
                                    Empresa</label>
                                <textarea wire:model="nota_empresa" rows="5"
                                    class="py-3 pl-2 w-full border-2 border-gray-300 text-xs rounded-md"></textarea>

                                <x-input-error :messages="$errors->get('nota_empresa')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-row gap-4">
                            <h1 class="font-bold text-lg">Productos</h1>
                            <a href="#"
                                class="bg-gradient-to-t from-amber-500 to-amber-200 shadow-xl rounded-lg px-3 py-1.5 text-white duration-300"
                                wire:click="abrirModal('modalProductos')">
                                Añadir
                            </a>
                        </div>

                        @if (empty($carrito))
                            <p class="text-sm text-neutral-500 font-light">No has incluido aún productos en el carrito. </p>
                        @else
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
                                    @foreach ($carrito as $item)
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
                        @endif

                    </div>

                    <div class="flex justify-end pt-2 space-x-14">
                        <input wire:click="createProduct()" class="px-4 text-center py-3 buttonGeneral cursor-pointer"
                            value="Crear">
                    </div>
                @endif

            </div>
            @if ($modalProductos)
                @include('livewire.pedidos.seleccionProductos')
            @endif
        </div>
    </div>

</div>
