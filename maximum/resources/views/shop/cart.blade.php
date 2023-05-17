<x-app-layout>
    <div class="lg:mx-24 mt-24">
        {{-- <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Carrito</li>
                </ol>
            </nav>
            @if (session()->has('success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if (session()->has('alert_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('alert_msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if (count($errors) > 0)
                @foreach ($errors0 > all() as $error)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="text-center text-xl font-bold">Carrito</h1>
                    <br>
                    @if (\Cart::getTotalQuantity() > 0)
                        <h4>{{ \Cart::getTotalQuantity() }} Producto(s) en el carrito</h4><br>
                    @else
                        <h4>No posees producto(s) en tu carrito.</h4>
                        <div class="text-end">
                            <a href="{{ route('shop') }}" class="bg-gray-800 text-white px-4 py-2 rounded">Ir a la
                                tienda</a>
                        </div>
                    @endif

                    @foreach ($cartCollection as $item)
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ $item->attributes->image }}" class="img-thumbnail" width="200"
                                    height="200">
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                    <b>Precio: </b>${{ $item->price }}<br>
                                    <b>Subtotal: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        {{ csrf_field() }}

                                        <div class="form-group row">
                                            <input type="hidden" value="{{ $item->id }}" id="id"
                                                name="id">
                                            <input type="number" class="form-control form-control-sm"
                                                value="{{ $item->quantity }}" id="quantity" name="quantity"
                                                style="width: 70px; margin-right: 10px;">
                                            <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i
                                                    class="fa fa-edit"></i></button>
                                        </div>
                                    </form>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $item->id }}" id="id"
                                            name="id">
                                        <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    @if (count($cartCollection) > 0)
                        <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn btn-secondary btn-md">Borrar Carrito</button>
                        </form>
                    @endif
                </div>
                @if (count($cartCollection) > 0)
                    <div class="col-lg-5">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                            </ul>
                        </div>
                        <br><a href="/" class="btn btn-dark">Continue en la tienda</a>
                        <a href="/checkout" class="btn btn-success">Proceder al Checkout</a>
                    </div>
                @endif
            </div>
            <br><br>
        </div> --}}

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
                            <form action="{{ route('cart.update') }}" method="POST" id="updateCart">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <input class="mx-2 border text-center w-16" id="quantity" min="1" type="number" name="quantity" value="{{ $item->quantity }}">
                                    <input type="hidden" value="{{ $item->id }}"  id="id" name="id">
                                </div>
                            </form>
                            {{-- <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                                <path
                                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                            </svg> --}}
                            {{-- <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                                <path
                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                            </svg> --}}
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
                <div>
                    <label class="font-medium inline-block mb-3 text-sm uppercase">Forma de envio</label>
                    <select class="block p-2 text-gray-600 w-full text-sm">
                        <option>Standard shipping - $10.00</option>
                    </select>
                </div>
                {{-- <div class="py-10">
                  <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                  <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                </div>
                <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button> --}}
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Precio total</span>
                        <span>{{ \Cart::getTotal() }}€</span>
                    </div>
                    <button
                        class=" font-semibold py-3 text-sm uppercase w-full buttonGeneral">Realizar
                        pedido</button>
                </div>
            </div>

        </div>
    </div>


</x-app-layout>
