<div class="mx-4">
    <div class="flex flex-row gap-4 my-4">
        <!-- component -->
        <div class='w-full lg:w-1/3 '>
            <div
                class="border border-gray-200 bg-gray-100 relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg  overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2 border-0" type="text"
                    wire:model="buscadorProductos" placeholder="Nombre, marca..." />
            </div>
        </div>
        <a href="#" wire:click='crear()'
            class="bg-amber-500 text-white hover:no-underline rounded-full px-3 py-1.5 font-bold text-2xl align-middle">
            +
        </a>
    </div>
    @if ($modalCreateProduct)
        @include('livewire.product.createProduct')
    @endif
    <div class="flex flex-row gap-8 my-4">
        <!-- component -->
        <div class='w-2/4 lg:w-1/3 '>
            <label>Precio</label>
            <select wire:model="ordenacion"
                class=" rounded py-2 w-full outline-none text-sm text-gray-700 pl-2  border">
                <option value="">Relevancia</option>
                <option value="asc">Más barato primero</option>
                <option value="desc">Más caro primero</option>
            </select>
        </div>
        <div class='w-2/4 lg:w-1/3 '>
            <label>Estado</label>
            <select wire:model="estadoBuscador"
                class="rounded py-2 w-full outline-none text-sm text-gray-700 pl-2  border">
                <option value="" selected>Todos</option>
                <option value="activo">Activo</option>
                <option value="desactivado">Desactivado</option>
            </select>
        </div>

    </div>
    <div class="relative overflow-auto shadow-md sm:rounded-lg">
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
                @foreach ($productos as $producto)
                    <tr class=" border-b  border-neutral-500 hover:bg-neutral-200">
                        <td class="w-4 p-2">
                            <div class="flex items-center justify-center">
                                {{$producto->id}}

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
                            <a href="#" wire:click="edit({{$producto->id}})" class="font-medium  text-blue-600 hover:no-underline">Editar</a>
                            <a href="#" wire:click="delete({{$producto->id}})"
                                class="font-medium  text-red-600 hover:no-underline hover:text-red-700">Eliminar
                            </a>
                        </td>

                    </tr>
                @endforeach
                @if ($modalDelete)
                    @include('livewire.product.delete', ['tipo' => 'Producto', 'id' => $deleteId])
                @endif

                @if ($modalEdit)
                    @include('livewire.product.editProduct', ['producto' => $productoEdit])
                @endif
            </tbody>
        </table>


    </div>
</div>
