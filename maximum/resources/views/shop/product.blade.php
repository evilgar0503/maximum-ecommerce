<x-app-layout>
    <div class="my-32 mx-16  grid grid-cols-5 h-100">
        <div class="col-span-3 grid grid-cols-3">
            <div class="col-span-1 grid grid-rows-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="rounded row-span-1 w-2/5 ml-auto">
                        <img src="{{ '/' . $producto->ruta_imagen }}" alt="" class="">
                    </div>
                @endfor
            </div>
            <div class="col-span-2 h-100">
                <img src="{{ '/' . $producto->ruta_imagen }}" alt="" class="h-full">
            </div>
        </div>
        <div class="col-span-2">
            <div class="flex justify-between">
                <div class="flex items-center mt-2.5 mb-5">
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span
                        class="bg-amber-300 text-amber-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">5.0</span>
                </div>
                <div class="my-auto">
                    <div class="heart"></div>
                </div>
            </div>

            <div>
                <h1 class="text-3xl font-bold">{{ $producto->nombre }}</h1>
            </div>
            <div class="mt-4">
                <p class="text-xl font-bold mb-3">{{ $producto->precio }} € </p>
                <p class="text-md"><span class="font-bold">Marca:</span> {{ $producto->marca }}</p>
                <p class="text-md"><span class="font-bold">Sabor:</span> {{ $producto->sabor }}</p>
                <p class="text-md"><span class="font-bold">Rango de edad:</span> {{ $producto->edad }}</p>
                <p class="text-md"><span class="font-bold">Peso del producto:</span> {{ $producto->peso }} kgs.</p>



            </div>
            <div class="mt-12">
                <label for="cantidad">Cantidad</label>
                <br>
                <input type="number" class="bg-gray-100 px-5 rounded w-1/3 outline-none mt-4 out" value="1"
                    min="0" max="9">
                <p class="text-sm text-gray-500">Indica la cantidad que desea añadir al carrito.</p>
                <button class=" my-6 p-4 rounded-tr-2xl rounded-br-2xl cart-button">Añadir al
                    carrito</button>
            </div>
            {{-- <div class="absolute">
                <div class="accordion">
                    <div class="accordion-header">Composición</div>
                    <div class="accordion-content">
                        Contenido del elemento
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">Título del elemento</div>
                    <div class="accordion-content">
                        Contenido del elemento
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">Título del elemento</div>
                    <div class="accordion-content">
                        Contenido del elemento
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
    <div class="mt-4 mx-24">
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Detalles del producto</h1>
            <div class="mx-16 text-justify">
                <p class="text-md"><span class="font-semibold">Publicado:</span>
                    {{ $producto->created_at->format('d/m/Y') }}</p>
                <p class="text-md"><span class="font-semibold">Marca:</span> {{ $producto->marca }}</p>
                <p class="text-md"><span class="font-semibold">Sabor:</span> {{ $producto->sabor }}</p>
                <p class="text-md"><span class="font-semibold">Rango de edad:</span> {{ $producto->edad }}</p>
                <p class="text-md"><span class="font-semibold">Peso del producto:</span> {{ $producto->peso }} kgs.</p>
            </div>
        </div>
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Más información del producto</h1>
            <div class="mx-32 text-justify">
                {!! $producto->descripcion !!}
            </div>
        </div>
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Información importante</h1>
            <div class="mx-32 text-justify">
                <div class="my-4">
                    <h2 class="text-xl font-bold mb-3">Ingredientes</h2>
                    {!! $producto->ingredientes !!}
                </div>
                <div class="my-4">
                    <h2 class="text-xl font-bold mb-3">Instrucciones</h2>
                    {!! $producto->instrucciones !!}
                </div>

            </div>
        </div>
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Reseñas clientes</h1>
            <div class="mx-32 text-justify">

            </div>
        </div>


    </div>

</x-app-layout>
