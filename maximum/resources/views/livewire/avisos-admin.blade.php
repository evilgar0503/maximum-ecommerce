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
                    wire:model="buscador" placeholder="Nombre, email..." />
            </div>
        </div>
        <a href="#" wire:click='crear()'
            class="bg-amber-500 text-white hover:no-underline rounded-full px-3 py-1.5 font-bold text-2xl align-middle">
            +
        </a>
    </div>

    <div class="flex flex-row gap-8 my-4">
        <!-- component -->
        <div class='w-full lg:w-1/4'>
            <label>Estado</label>
            <select wire:model="estadoBuscador"
                class="rounded py-2 w-full outline-none text-sm text-gray-700 pl-2  border">
                <option value="">Todos</option>
                <option value="pendiente">Pendientes</option>
                <option value="solucionado">Leidos</option>
            </select>
        </div>

    </div>
    <div class="relative overflow-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left  my-4 rounded">
            <thead class="text-xs uppercase text-white" style="background-color: #212121;">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-amber-500 rounded focus:ring-amber-600 ring-offset-amber-800 focus:ring-offset-amber-800 bg-neutral-500 border-neutral-400">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Asunto</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($avisos as $aviso)
                    <tr class="border-b  border-neutral-500  @if ($aviso->estado == 'pendiente')
                        hover:bg-neutral-200
                        @else
                        bg-neutral-200

                    @endif">
                    <td class="w-4 p-2">
                        <div class="flex items-center justify-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-amber-500 rounded focus:ring-amber-600 ring-offset-amber-800 focus:ring-offset-amber-800 focus:ring-2 bg-neutral-500 border-neutral-400">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                        <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                            {{ $aviso->nombre }}
                        </th>
                        <td class="px-6 py-2 ">
                            {{ $aviso->asunto }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $aviso->email }}
                        </td>
                        <td class="flex items-center px-6 py-4 space-x-3">
                            <a href="#" wire:click="ver({{ $aviso->id }})"
                                class="font-medium  text-blue-600 hover:no-underline">Ver</a>
                            <a href="#" wire:click="delete({{ $aviso->id }})"
                                class="font-medium  text-red-600 hover:no-underline hover:text-red-700">Eliminar
                            </a>
                        </td>

                    </tr>
                @endforeach
                @if ($modalDelete)
                    @include('livewire.product.delete', ['tipo' => 'Producto', 'id' => $deleteId])
                @endif

                {{-- @if ($modalEdit)
                    @include('livewire.product.editProduct', ['producto' => $productoEdit])
                @endif --}}

                @if ($modalNoticia)
                    @include('livewire.avisos.verAviso')
                @endif
            </tbody>
        </table>


    </div>
</div>
