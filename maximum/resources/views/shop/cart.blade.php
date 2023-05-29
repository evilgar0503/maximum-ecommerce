<x-app-layout>
    <div class="lg:mx-24 mt-24">
        @if (session()->has('error_msg'))
            <div class="mr-4 ml-2 w-full rounded bg-amber-500 py-3 px-4 flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  {{session('error_msg')}}
            </div>
        @endif
        @if (session()->has('success_msg'))
        <div class="mr-4 ml-2 w-full rounded bg-green-400 py-3 px-4 flex flex-row gap-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
              {{session('success_msg')}}
        </div>
    @endif
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
                            <form action="{{ route('cart.update') }}" method="POST" id="updateCart{{ $item->id }}">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <input class="mx-2 border text-center w-16 quantity-input" id="{{ $item->id }}"
                                        min="1" type="number" name="quantity" value="{{ $item->quantity }}">
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                </div>
                            </form>
                        </div>
                        <span class="text-center w-1/5 font-semibold text-sm">{{ $item->price }}€</span>
                        <span
                            class="text-center w-1/5 font-semibold text-sm">{{ \Cart::get($item->id)->getPriceSum() }}€</span>
                    </div>
                @endforeach
                <div class="flex flex-row justify-between h-fit ">
                    <a href="{{ route('shop') }}" class="flex font-semibold text-amber-600 text-sm mt-10 hover:text-amber-700 translateEffect">
                        <svg class="fill-current mr-2 text-amber-600 w-4 svgEffect" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                        </svg>
                        <span class="">Continuar comprando</span>
                    </a>
                    <a href="{{ route('cart.clear') }}"
                        class="flex font-semibold text-gray-600 text-sm mt-10 hover:text-gray-700"> Limpiar carrito
                    </a>
                </div>


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
                    <a href="{{ route('checkout', ['volver' => 0]) }}">
                        <button class=" font-semibold py-3 text-sm uppercase w-full buttonGeneral">Realizar
                            pedido</button>
                    </a>

                </div>
            </div>

        </div>
    </div>


</x-app-layout>
