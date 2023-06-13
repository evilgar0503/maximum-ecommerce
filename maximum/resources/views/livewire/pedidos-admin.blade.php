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
                    <th scope="col" class="px-6 py-3">Fecha</th>
                    <th scope="col" class="px-6 py-3">Cod. Seguimiento</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Precio Total</th>
                    <th scope="col" class="px-6 py-3">Estado</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr class="border-b  border-neutral-500 hover:bg-neutral-200 ">
                        <td class="w-4 p-2">
                            <div class="flex items-center justify-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-amber-500 rounded focus:ring-amber-600 ring-offset-amber-800 focus:ring-offset-amber-800 focus:ring-2 bg-neutral-500 border-neutral-400">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                            {{ $pedido->created_at->format('d-m-Y') }}

                        <td class="px-6 py-2 ">
                            {{ $pedido->cod_seguimiento }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $pedido->user->email }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $pedido->precio_total }}€
                        </td>
                        <td class="px-6 py-2 uppercase">
                            <span
                                class="py-1.5 px-2 text-white font-semibold rounded @if ($pedido->estado == 'pendiente') bg-red-500
                                @else
                                bg-green-500 @endif">
                                {{ $pedido->estado }}</span>
                        </td>
                        <td class="flex items-center px-6 py-4 space-x-3">
                            <a href="#" wire:click="ver({{ $pedido->id }})"
                                class="font-medium  text-blue-600 hover:no-underline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </a>
                            <a href="#" wire:click="noVisto({{ $pedido->id }})"
                                class="font-medium  text-gray-600 hover:text-gray-900 hover:no-underline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                    <path
                                        d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" />
                                </svg>
                            </a>
                            <a href="#" wire:click="delete({{ $pedido->id }})"
                                class="font-medium  text-red-600 hover:no-underline hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </td>

                    </tr>
                @endforeach
                @if ($modalDelete)
                    @include('livewire.pedidos.delete', ['tipo' => 'Aviso', 'id' => $deleteId])
                @endif

                @if ($modalEdit)
                    @include('livewire.pedidos.editPedido', ['producto' => $productoEdit])
                @endif

                @if ($modalCreatePedido)
                    @include('livewire.pedidos.createPedido')
                @endif
            </tbody>
        </table>
    </div>
</div>
