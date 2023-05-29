<x-app-layout>
    <form method="POST" action="{{route('rate.create')}}">
        @csrf
        <div class="mt-12  mx-4 lg:mx-0 py-12">
            <div class="flex w-full mx-auto lg:w-2/5 flex-col gap-4">
                <h1 class="text-xl font-bold">Valoración</h1>
                <hr>
                <div class="flex flex-row">
                    <img src="/{{ $producto->ruta_imagen }}" alt="" class="w-28">
                    <h2 class="mt-6 font-semibold">{{ $producto->nombre }}</h2>
                    <input type="hidden" name="producto_id" value="{{$producto->id}}">
                </div>
                <hr>
                <div class="flex flex-col gap-2">
                    <h2 class="mt-6 font-bold text-xl">Valoración general</h2>
                    <div class="flex items-center justify-center lg:justify-start" id="puntuacionEstrellas">
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-300" fill="currentColor" id="1" onclick="calificar(this.id)"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-300" fill="currentColor" id="2" onclick="calificar(this.id)"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-300" fill="currentColor" id="3" onclick="calificar(this.id)"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-300" fill="currentColor" id="4" onclick="calificar(this.id)"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-10 h-10 text-gray-300" fill="currentColor" id="5" onclick="calificar(this.id)"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <input type="hidden" name="valoracion" id="valoracion" value="">
                </div>
                <hr>
                <div class="flex flex-col gap-2">
                    <h2 class="mt-6 font-bold text-xl">Añade un título</h2>
                    <input type="text" name="titulo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full pl-3 p-2.5 "
                        placeholder="¿Qué opinas?">
                </div>
                <hr>
                <div class="flex flex-col gap-2">
                    <h2 class="mt-6 font-bold text-xl">Añade tu reseña</h2>
                    <textarea rows="6" name="comentario"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full pl-3 p-2.5 resize-none"
                        placeholder="¿Qué te ha gustado y qué no?¿Qué tal tu experiencia?"></textarea>
                </div>
                <hr>
                <div class="text-end">
                    <input type="submit" class="w-2/5 lg:w-1/6 py-2 px-3 buttonGeneral">
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
