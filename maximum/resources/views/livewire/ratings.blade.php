<div class="flex flex-col w-full lg:w-2/3">
    @if (count($valoraciones) == 0)
    <div class="h-max flex items-center">
        <p class="mt-2"> No existen aún reseñas para este producto.</p>

    </div>
    @else
        <select name="ordenacion" wire:model="ordenacion" class="w-full lg:w-1/3 text-sm rounded p-1">
            <option value="">Relevancia</option>
            <option value="desc">Más reciente</option>
            <option value="asc">Más antiguo</option>
        </select>

        @foreach ($valoraciones as $rate)
            <article class="my-4">
                <div class="flex items-center mb-4 space-x-4">
                    <img class="w-10 h-10 rounded-full" src="/storage/{{ $rate->own->ruta_imagen }}" alt="">
                    <div class="space-y-1 font-medium dark:text-white">
                        <p>{{ $rate->own->nombre }} {{ $rate->own->apellidos }} <time datetime="2014-08-16 19:00"
                                class="block text-sm text-gray-500 dark:text-gray-400">Miembro desde
                                {{ $rate->own->created_at->format('F, Y') }}</time></p>
                    </div>
                </div>

                <div class="flex items-center mb-1">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 <?php if ($rate->valoracion >= 1) {
                        echo 'pintadaEstrella';
                    } ?>" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 <?php if ($rate->valoracion >= 2) {
                        echo 'pintadaEstrella';
                    } ?>" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 <?php if ($rate->valoracion >= 3) {
                        echo 'pintadaEstrella';
                    } ?>" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 <?php if ($rate->valoracion >= 4) {
                        echo 'pintadaEstrella';
                    } ?>" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 <?php if ($rate->valoracion >= 5) {
                        echo 'pintadaEstrella';
                    } ?>" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">{{ $rate->titulo }}</h3>
                </div>
                <div class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <p>Reseña creada el {{ $rate->created_at->format('d-m-Y H:i:s') }}</p>
                </div>
                <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $rate->comentario }}</p>
                <aside>
                    <div
                        class="flex ml-auto w-2/4 lg:w-1/5 mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                        <a href="{{ route('contacto') }}"
                            class="pl-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Reportar
                            comentario</a>
                    </div>
                </aside>
            </article>
            <hr>
        @endforeach
        <div class="mt-4 ">
            {{ $valoraciones->links() }}
        </div>
    @endif



</div>
