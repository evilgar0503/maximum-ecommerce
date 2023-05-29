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
                            <svg class="w-5 h-5 text-gray-300 <?php if (number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2) >= 1) { echo 'pintadaEstrella'; } ?>" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300 <?php if (number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2) >= 2) { echo 'pintadaEstrella'; } ?>" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300  <?php if (number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2) >= 3) { echo 'pintadaEstrella'; } ?>"" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300  <?php if (number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2) >= 4) { echo 'pintadaEstrella'; } ?>"" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300  <?php if (number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2) >= 5) { echo 'pintadaEstrella'; } ?>"" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <span
                                class="bg-amber-300 text-amber-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">{{number_format($producto->valoracionesUsuarios()->avg('valoracion'), 2)}}</span>
                        </div>
                </a>

                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold text-gray-900">{{ $producto->precio }} €</span>
                    @if ($producto->stock > 0)
                        <div wire:click="addToCart({{ $producto->id }})"
                            class="cursor-pointer text-white focus:ring-4 font-medium rounded-lg text-sm bg-gradient-to-t from-amber-600 to-amber-200 px-4 py-2.5 text-center shadow-2xl hover:scale-105 group">
                            <button class="flex flex-row gap-2 items-center">

                                <svg width="16" height="16" viewBox="0 0 16 16"
                                    class="group-hover:rotate-180 duration-300 ease-in-out" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0961 12.07C13.7854 13.1295 14.1102 13.692 14.1102 14.2788C14.1102 15.4375 13.2287 15.9993 12.0411 15.9993C11.5177 15.9993 11.1797 15.9987 10.3257 15.5649C10.3257 15.5649 9.77238 15.0706 8.47744 15.1214C7.17042 15.0709 6.61674 15.5712 6.61674 15.5712C5.76273 16.0046 5.4369 16 4.91409 16C3.72653 16 2.84433 15.4388 2.84433 14.2794C2.84433 13.6927 3.17016 13.1308 3.85908 12.0707C3.85908 12.0707 5.1614 9.95925 6.2899 8.96595C7.10532 8.24914 8.29422 8.25177 8.29422 8.25177H8.66099C8.66099 8.25177 9.90191 8.24849 10.6663 8.96595C11.7599 9.99529 13.0961 12.0704 13.0961 12.07ZM5.57616 6.83978C6.81774 6.83978 7.8241 5.30854 7.8241 3.41989C7.8241 1.53124 6.81774 0 5.57616 0C4.33457 0 3.32821 1.53124 3.32821 3.41989C3.32821 5.30854 4.33457 6.83978 5.57616 6.83978ZM3.42184 10.1519C4.33692 9.73943 4.54564 8.27699 3.8876 6.88532C3.22956 5.49364 1.95442 4.69952 1.03933 5.11165C0.12425 5.52378 -0.0841356 6.98655 0.57357 8.37822C1.23161 9.7699 2.50675 10.5637 3.42184 10.1519ZM10.8026 6.83978C12.0442 6.83978 13.0508 5.30854 13.0508 3.41989C13.0508 1.53124 12.0442 0 10.8026 0C9.56098 0 8.55462 1.53124 8.55462 3.41989C8.55462 5.30854 9.56098 6.83978 10.8026 6.83978ZM15.3397 5.11132C14.4243 4.69887 13.1495 5.49299 12.4915 6.88499C11.8334 8.27699 12.0421 9.73943 12.9576 10.1519C13.873 10.564 15.1478 9.7699 15.8058 8.37822C16.4639 6.98655 16.2551 5.52378 15.3397 5.11132Z"
                                        fill="white" />
                                </svg>

                            </button>
                        </div>
                    @else
                        <div
                            class="text-white focus:ring-4 font-medium rounded-lg text-sm px-2 py-1.5 text-center bg-gradient-to-t from-red-500 to-transparent uppercase tracking-widest shadow-xl hover:scale-105">
                            AGOTADO
                        </div>
                    @endif
                </div>
            </div>

    </div>
    @endforeach
</div>
<div>
    {{ $productos->links() }}
</div>
</div>

</div>
