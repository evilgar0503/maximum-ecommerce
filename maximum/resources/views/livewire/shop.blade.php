<div class="lg:w-3/5 px-4 my-16 mx-auto">
    <div class="flex justify-between my-4 text-md">
        <span>
            {{ count($productos) }} resultados
        </span>
        <span>
            <select wire:model="precio" class="rounded w-52 p-1 text-sm">
                <option value="">Relevancia</option>
                <option value="asc">Precio ascendente</option>
                <option value="desc">Precio descendente</option>
            </select>
        </span>
    </div>
    <hr>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-14 my-4">
        @foreach ($productos as $producto)
            <div class="bg-white shadow-md rounded-lg max-w-sm ">
                <a href="{{ route('product.view', $producto->id) }}">
                    <img class="rounded-t-lg p-8" src="{{ '/' . $producto->ruta_imagen }}" alt="product image">
                    <div class="px-3 pb-2 lg:px-5">
                        <h3 class="text-gray-900 font-semibold text-md tracking-tight ">
                            {{ $producto->nombre }}</h3>
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
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">{{ $producto->precio }} €</span>
                            <form method="POST" action="{{ route('cart.store', $producto) }}"
                                class="text-white focus:ring-4 font-medium rounded-lg text-sm px-4 py-2.5 text-center pintada">
                                @csrf
                                <input type="hidden" value="1" name="quantity">

                                <input type="hidden" value="{{ $producto->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $producto->nombre }}" id="name" name="name">
                                <input type="hidden" value="{{ $producto->precio }}" id="price" name="price">
                                <input type="hidden" value="{{ $producto->ruta_imagen }}" id="img" name="img">
                                <input type="hidden" value="{{ $producto->slug }}" id="slug" name="slug">
                                <button type="submit" class="flex flex-row items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        fill="currentColor"
                                        class="bi bi-cart-fill hover:rotate-45 duration-300 ease-in-out "
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    Añadir
                                </button>
                            </form>

                        </div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
    <div>
        {{ $productos->links() }}
    </div>
</div>

</div>
