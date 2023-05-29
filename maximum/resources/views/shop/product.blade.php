<x-app-layout>
    <div class="my-32 mx-4 lg:mx-16 grid grid-cols-5 h-100">
        <div class="col-span-5 lg:col-span-1 columna flex  gap-6 order-2 lg:order-1 mt-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="rounded w-2/5 ml-auto lg:flex lg:flex-col ">
                    <img src="{{ '/' . $producto->ruta_imagen }}" alt="" class="">
                </div>
            @endfor
        </div>
        <div class="col-span-5 lg:col-span-2 order-1 lg:order-2">
            <img src="{{ '/' . $producto->ruta_imagen }}" alt="" class="h-full w-full">
        </div>
        <div class="col-span-5 lg:col-span-2 order-3">
            <div class="flex justify-between">
                <div class="flex items-center my-3">
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
                <p class="text-2xl font-semibold mb-3">{{ $producto->precio }} € </p>
                <p class="text-md"><span class="font-bold">Marca:</span> {{ $producto->marca }}</p>
                <p class="text-md"><span class="font-bold">Sabor:</span> {{ $producto->sabor }}</p>
                <p class="text-md"><span class="font-bold">Rango de edad:</span> {{ $producto->edad }}</p>
                <p class="text-md"><span class="font-bold">Peso del producto:</span> {{ $producto->peso }} kgs.</p>
            </div>
            <div class="mt-4 lg:mt-12">
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <label for="cantidad" class="font-bold">Cantidad</label>
                    <br>
                    <input type="number" class="bg-gray-100 rounded w-1/6 outline-none mt-2" value="1"
                        min="1" name="quantity">
                    <p class="text-sm text-gray-500">Indica la cantidad que desea añadir al carrito.</p>

                    <input type="hidden" value="{{ $producto->id }}" id="id" name="id">
                    <input type="hidden" value="{{ $producto->nombre }}" id="name" name="name">
                    <input type="hidden" value="{{ $producto->precio }}" id="price" name="price">
                    <input type="hidden" value="{{ $producto->ruta_imagen }}" id="img" name="img">
                    <input type="hidden" value="{{ $producto->slug }}" id="slug" name="slug">
                    <button type="submit" class="ml-auto my-6 p-4 w-100 lg:w-50 buttonGeneral">Añadir al
                        carrito</button>
                </form>
            </div>
        </div>

    </div>
    <div class="mt-2 mx-4 lg:mx-24">
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Detalles del producto</h1>
            <div class="mx-5 lg:mx-16">
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
            <h1 class="text-2xl font-bold mb-3">Más información</h1>
            <div class=" mx-4 lg:mx-32 text-justify">
                {!! $producto->descripcion !!}
            </div>
        </div>
        <hr class="my-4">
        <div class="my-6">
            <h1 class="text-2xl font-bold mb-3">Información importante</h1>
            <div class="mx-4 lg:mx-32 text-justify">
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
            @php
                $media = $producto->valoracionesUsuarios()->avg('valoracion');
                $totalValoraciones = $producto->valoracionesUsuarios()->count();
                $valoraciones = $producto->valoracionesUsuarios()->get();
                $frecuenciaValoraciones = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0]; // Inicializamos el array con los posibles valores de las valoraciones
                foreach ($valoraciones as $valoracion) {
                    $frecuenciaValoraciones[$valoracion->pivot->valoracion]++;
                }
                $porcentajesValoraciones = [];

                foreach ($frecuenciaValoraciones as $valoracion => $frecuencia) {
                    $porcentajesValoraciones[$valoracion] = ($frecuencia / $totalValoraciones) * 100;
                }
            @endphp
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="flex flex-col w-full lg:w-1/3">
                    <div class="flex items-center mb-3">
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 <?php if ($media >= 1) {
                            echo 'pintadaEstrella';
                        } ?>" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 <?php if ($media >= 2) {
                            echo 'pintadaEstrella';
                        } ?>" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 <?php if ($media >= 3) {
                            echo 'pintadaEstrella';
                        } ?>" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 <?php if ($media >= 4) {
                            echo 'pintadaEstrella';
                        } ?>" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-300 w-7 h-7 <?php if ($media >= 5) {
                            echo 'pintadaEstrella';
                        } ?>" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{ number_format($media, 2) }} de 5</p>

                    </div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        {{ count($producto->valoracionesUsuarios()->get()) }} reseña(s)</p>
                    <div class="flex items-center mt-4">
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">5 estrellas</span>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$porcentajesValoraciones[5]}}%"></div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{number_format($porcentajesValoraciones[5], 2)}}%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4 estrellas</span>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$porcentajesValoraciones[4]}}%"></div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{number_format($porcentajesValoraciones[4],2)}}%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">3 estrellas</span>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$porcentajesValoraciones[3]}}%"></div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{number_format($porcentajesValoraciones[3], 2)}}%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">2 estrellas</span>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$porcentajesValoraciones[2]}}%"></div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{number_format($porcentajesValoraciones[2], 2)}}%</span>
                    </div>
                    <div class="flex items-center my-4">
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1 estrellas</span>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$porcentajesValoraciones[1]}}%"></div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{number_format($porcentajesValoraciones[1], 2)}}%</span>
                    </div>
                    <hr>
                    <div class="my-4">
                        <h1 class="text-lg font-bold mb-3">Valorar este producto</h1>
                        <p class="text-md mb-2">Comparte tu opinión con otros clientes.</p>
                        <a href="{{ route('product.rate', $producto->id) }}"
                            class="w-fit outline-none text-base group">
                            <button
                                class="w-full mx-auto border border-gray-400 shadow-xl rounded-lg py-1 text-base group-hover:text-gray-700 hover:-translate-y-1 duration-200">Escribir
                                mi opinión</button>
                        </a>
                    </div>
                    <hr>
                </div>
                @livewire('ratings', ['producto' => $producto])
            </div>
        </div>

</x-app-layout>
