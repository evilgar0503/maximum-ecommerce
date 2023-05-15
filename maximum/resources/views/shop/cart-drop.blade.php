<div class="w-100">
    @if (count(\Cart::getContent()) > 0)
        <ul class="list-group">

            @foreach (\Cart::getContent() as $item)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ $item->attributes->image }}" width="50" height="50">
                        </div>
                        <div class="col-lg-6">
                            <b>{{ $item->name }}</b>
                            <br><small>Cantidad: {{ $item->quantity }}</small>
                        </div>
                        <div class="col-lg-3">
                            <p>{{ \Cart::get($item->id)->getPriceSum() }} €</p>
                        </div>
                        <hr>
                    </div>
                </li>
            @endforeach
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg-7">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-3 rounded-sm text-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <b>Total: </b>{{ \Cart::getTotal() }} €
                    </div>
                </div>
            </li>
        </ul>
        <br>
        <div class="row" style="margin: 0px;">
            <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
                CARRITO <i class="fa fa-arrow-right"></i>
            </a>
            <a class="btn btn-dark btn-sm btn-block" href="">
                CHECKOUT <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    @else
        <li class="list-group-item">Tu carrito esta vacío</li>
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
            Ir al carrito <i class="fa fa-arrow-right"></i>
        </a>
    @endif
</div>
