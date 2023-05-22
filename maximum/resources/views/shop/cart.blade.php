<x-app-layout>
    <div class="lg:mx-24 mt-24">
        <div class="flex flex-col lg:flex-row shadow-md my-10">
            <div class="w-full bg-white px-3 lg:px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Carrito</h1>
                    <h2 class="font-semibold text-2xl">{{ count($cartCollection) }} producto(s)</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalles Prodcuto(s)</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Cantidad</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Precio</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                @foreach ($cartCollection as $item)
                    <div class="flex items-center -mx-8 px-6 py-5">
                        <div class="flex w-2/5">
                            <!-- product -->
                            <div class="w-20">
                                <img class=" w-48" src="{{ $item->attributes->image }}" alt="">
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm">{{ $item->name }}</span>
                                <span class="text-red-500 text-xs">Producto</span>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button
                                        class="font-semibold hover:text-red-500 text-gray-500 text-xs">Eliminar</button>
                                </form>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">
                            <form action="{{ route('cart.update') }}" method="POST" id="updateCart{{$item->id}}">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <input class="mx-2 border text-center w-16 quantity-input" id="{{$item->id}}" min="1" type="number" name="quantity" value="{{ $item->quantity }}">
                                    <input type="hidden" value="{{ $item->id }}"  id="id" name="id">
                                </div>
                            </form>
                        </div>
                        <span class="text-center w-1/5 font-semibold text-sm">{{ $item->price }}€</span>
                        <span
                            class="text-center w-1/5 font-semibold text-sm">{{ \Cart::get($item->id)->getPriceSum() }}€</span>
                    </div>
                @endforeach
                <a href="{{ route('shop') }}"
                    class="flex font-semibold text-amber-600 text-sm mt-10 hover:text-amber-700">
                    <svg class="fill-current mr-2 text-amber-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continuar comprando
                </a>
            </div>

            <div id="summary" class="w-full lg:w-1/4 px-3 lg:px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Resumen pedido</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Subtotal</span>
                    <span class="font-semibold text-sm">{{ \Cart::getTotal() }}€</span>

                </div>
                <div class="flex justify-between mt-10 mb-5">
                </div>
                {{-- <div>
                    <label class="font-medium inline-block mb-3 text-sm uppercase">Forma de envio</label>
                    <select class="block p-2 text-gray-600 w-full text-sm" id="shippingMethod">
                        @foreach ($shippingMethod as $method)
                        <option value="{{$method->id}}">{{ $method->nombre }} - {{ $method->cargo }}€</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Precio total</span>
                        <span>{{ \Cart::getTotal() }}€</span>
                    </div>
                    <a href="{{route('checkout', ['volver' => 0])}}">
                    <button class=" font-semibold py-3 text-sm uppercase w-full buttonGeneral">Realizar pedido</button>
                    </a>

                </div>
            </div>

        </div>
    </div>


</x-app-layout>
