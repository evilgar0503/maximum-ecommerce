<div class="mx-4">
    <div class="flex flex-row gap-4 my-4">
        <!-- component -->
        <a href="#" wire:click='crear()'
            class=" py-2 bg-amber-500 text-white hover:no-underline rounded-full px-3 font-bold text-2xl align-middle">
            +
        </a>
    </div>

    <div class="relative overflow-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left  my-4 rounded">
            <thead class="text-xs uppercase text-white" style="background-color: #212121;">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Cargo</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($metodos as $metodo)
                    <tr class=" border-b  border-neutral-500 hover:bg-neutral-200">
                        <td class="w-4 p-2">
                            <div class="flex items-center justify-center">
                                {{ $metodo->id }}
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                            {{ $metodo->nombre }}
                        </th>
                        <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                            {{ $metodo->cargo }}€
                        </th>
                        <td class="flex items-center px-6 py-4 space-x-3 text-end">
                            <a href="#" wire:click="edit({{ $metodo->id }})"
                                class="font-medium  text-blue-600 hover:no-underline">Editar</a>
                            <a href="#" wire:click="delete({{ $metodo->id }})"
                                class="font-medium  text-red-600 hover:no-underline hover:text-red-700">Eliminar
                            </a>
                        </td>

                    </tr>
                @endforeach
                @if ($modalDelete)
                    @include('livewire.metodo-envio.delete', ['tipo' => 'Método Envío', 'id' => $deleteId])
                @endif

                @if ($modalEditMetodo)
                    @include('livewire.metodo-envio.editEnvio', ['metodo' => $metodoEdit])
                @endif
            </tbody>
        </table>
        @if ($modalCreateMetodo)
            @include('livewire.metodo-envio.createEnvio')
        @endif

    </div>
</div>
