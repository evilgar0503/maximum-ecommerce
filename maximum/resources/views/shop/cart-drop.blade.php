<div class="w-full">
    <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto w-screen max-w-md">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            @if (count(\Cart::getContent()) > 0)

                                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Carrito de
                                            compra</h2>
                                        <div class="ml-3 flex h-7 items-center">
                                            <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                @foreach (\Cart::getContent() as $item)
                                                    <li class="flex py-6">
                                                        <a href="#">
                                                            <div class="h-full w-16 lg:h-24 lg:w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                                <img src="{{ $item->attributes->image }}"
                                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                                    class="h-full w-full object-cover object-center">
                                                            </div>
                                                        </a>

                                                        <div class="ml-4 flex flex-1 flex-col">
                                                            <div>
                                                                <div class="flex justify-between items-center text-base font-medium text-gray-900">
                                                                    <h3>
                                                                        <a href="#">{{ $item->name }}</a>
                                                                    </h3>
                                                                    <p class="ml-4">
                                                                        {{ \Cart::get($item->id)->getPriceSum() }}€</p>
                                                                </div>
                                                                <p class="mt-1 text-sm text-gray-500">Precio:
                                                                    {{ $item->price }} €</p>
                                                            </div>
                                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                                <p class="text-gray-500">Cantidad: {{ $item->quantity }}
                                                                </p>
                                                                <div class="flex">
                                                                    <form action="{{ route('cart.remove') }}"
                                                                        method="POST">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" id="id"
                                                                            name="id" value="{{ $item->id }}">
                                                                        <button
                                                                            class="font-bold py-auto px-3 rounded-sm text-sm">
                                                                            <i class="fa fa-trash text-gray-400"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <p>Subtotal</p>
                                        <p>{{ \Cart::getTotal() }}€ </p>
                                    </div>
                                    <p class="mt-0.5 text-sm text-gray-500">Gastos de envío no incluido.
                                    </p>
                                    <div class="mt-6">
                                        <a href="{{ route('cart.index') }}"
                                            class="flex items-center justify-center rounded-md border border-transparent buttonGeneral px-6 py-3 text-base font-medium shadow-sm ">Finalizar
                                            pedido</a>
                                    </div>
                                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                        <p>
                                            or
                                            <a href="{{ route('shop') }}">
                                                <button type="button"
                                                    class="font-medium text-amber-600 hover:text-amber-700">
                                                    Continuar comprando
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Carrito de
                                            compra</h2>
                                        <div class="ml-3 flex h-7 items-center">
                                            <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mt-36 lg:mt-52">
                                            <div class="mx-auto my-auto w-3/4 text-center items-center">
                                                <svg width="110" height="110" viewBox="0 0 128 128" fill="none"
                                                    class="ml-2 w-100 opacity-50">
                                                    <rect width="110" height="110" fill="url(#pattern0)" />
                                                    <defs>
                                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                            width="1" height="1">
                                                            <use xlink:href="#image0_12_3"
                                                                transform="scale(0.0078125)" />
                                                        </pattern>
                                                        <image id="image0_12_3" width="110" height="110"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAACxQAAAsUBidZ/7wAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAcxSURBVHic7Z1NqFVVFMd/62GaJk+SILIPEbOiUHgamBWC0cxJg2pgRE6igkqJBg0iKiIalBgEgQ6CICd9UAN1lK8krEifYRGRpaX4RaL5Mp8auhqcc+x537uf55y99rln/WDjve+cu9Y6d//P3nvtvc9VVBWnvgxYB+DY4gKoOS6AmuMCqDkugJrjAqg5U7IXIjINuAMYLMnXaWBEVS+WZN/pAVFVRORZ4A1gesn+DgMfAC+4EOJAgFUklRKSZ1T1ncA+nUkQYAQYCux3FJivqscD+3UaGAAWGPgdBO4z8Os0MADsNfK9zMivM44B4E0j3y6ACBhQ1U3AGmAssO+hNPV0DJFsObikeYAHSMTVjHtUdUeB/pwuuTQRpKrnSDKCwhCRs7QWwDLABWBI2VPBu4FzLY77OMCYUgWQtiq7W5ziAjAmxGLQ1y2OzRGRmwLE4DTBWgDgrYApLoCaIyF2BYvIQeCGJof30DpTcIrlBPDjpdVYVS29AB8C6iWa8hewWlWD7Qhq1w04YZkFvCciD7sA6s3zocYA00j2AEwt3ZnTDUeCtABlTDM7hfBnyF3B3g3ExxcugHqzJcgYAEBEbgQOBHHmdMIYMDtYC6CqB4FDofw5bRlW1bOhnwzybiAetkL4R8NcAPHgAqgxe1X1NwgvgBHgfGCfzkS2Zi+CCqCDHUJOGLZkLyweD/duwJYx4MvsjQugfgyr6tnsjQugfmwd/ya4AHxCyBxbAaR4K2DDpfQvwwVQL7Y2/sFKAN8Y+a07Wxr/EGw18DKnvkPIgjFg9vgMAIxaAJ8QMmG4sfLB9ncCfRwQlgn9P7gA6oQLoMZMSP8yzASQTggdtvJfMya9+8H+t4K9FQjDhPQvwwXQ/1y2+teIC6D/mTT9y7AWwC58h1DZNO3/wVgAPiEUhHgFkOLdQHk0Tf8yYhCALwyVR8u7H+IQgLcA5dE0/cswWQ2cEITIIWCOdRx9xqSrf43E0AKAtwJl0DL9y3AB9C9t+39wAfQzHQkgljHAlcApfIdQUexV1Vs6OTGKFiDtq763jqOP6Ojuh0gEkOLdQHG0Tf8yXAD9R8vVv0ZcAP1HR+lfRjQCUNUD+A6hIui4/4eIBJDirUB+Ki0AXxjKR9vVv0ZiE4C3APno6u6H+ASwC/jXOogK03H6lxGVANLRq+8Q6o2u0r+MqASQ4t1Ab3SV/mW4APqHrvt/iFMAngn0RvUFICJTgUet46ggXad/GVPanxIGEVkBvAvcah1LBenp7odIBCAiK4FPiSSeCtJ1+pdhviFERJYC24AZpoFUl442fzbDdAwgIjOAz/DKz8P6Xisf7AeBTwDXGsdQZfYAL+cxYNYFpCP+fcD1bU49BfyEP0Q6nqPAx8BmVT2Tx5DloOt+Wlf+GWCtqm4MFE8tsewCbmtz3Cs/AJYCaJXvn/LKD4OlAFo1/78Gi6LmWArg5xbHbg4WRc2xFMCuFsdmicjjwSKpMbEKAGC9i6B8LOcBBDgJzGpzajYPcK70oKrD38B3wNuqOprHkOlagIg8B7xlFkD1+QNYqqrHejVgPRW8HthuHEOVmUvOGyiG1cB5JHPaM00DqS5HVfW6Xj9s3QKgqvuBx4DT1rHUEXMBAKjqJ8AivDvohc/zfNi8CxiPiAwAa4GXaJ8dOPA7cFeeQWBUAshIU8QFwJK0LASmNTl9evrvWIDQQiDAVSTL382WwEfphzSwF9LNoytJhLEYGEwPjZI8VbSTZJ182CbC7khbvUeAe/lf7NlvJR0hmTDbBWxS1V8KD0BVK1FIsoQNgHZYNgAzreNuc03zga86vJ4zwBrSm7awGKy/hA6/qOUku4c6rfys7AOWW8ff5JqeJMl8ur2mbcDc2gggrfwLPXxRWbkQmwiAF3Ncj5JsCbumiFiiHgOIyEySSaJ5OU3tBxapqvlcg4gMAd8CV+Q09ZGqPpQ3nijmAVqwjvyVT2pjXQF2cpH+l7nvk7/yAR4UkVW5rVg3hy2ayRXkayYnKyuMr+mVgq/nBMlDIT3HFHMLsLIiNi39Xw3cncdAzAJYUoLNO0uw2RHpcxALSzCd65qiFEA6E7i4BNNDqW0Lxk/wFEmuGyVKAZBMAw+2Pat7BlPbFpTRouW2G6sAnEDEKoC9JHP7RTOa2rag3SZYE7tRCkCTnGmkBNO71W7m6wfKecC1/wSQUsYds7MEmx2hqudJRFA0ua4pZgFsrohNS/8ngR15DEQrAE3W84t8QHSj2u8ReB34sUB7T6vqiTwGfDEoML4Y1AVpha0GLuYwcxFYHUPlA6jqbuDVnGaOAU8VEE7cAgBQ1e0kC0P7e/j4fpIFoKh2G6vqayQV+E8PHx8meRroeFHBVKLgW8JK2RIW9RhgMnxTaMH+qyaA8YzbPg7J7+VW92JS0lXD24FjqnqkdH998J05OYh+EOiUiwug5rgAao4LoOa4AGqOC6Dm/AdTiPwaJSNhLwAAAABJRU5ErkJggg==" />
                                                    </defs>
                                                </svg>
                                                <span class="text-gray-500">No posee artículos en su carrito.</span>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <p>Subtotal</p>
                                        <p>0.00€</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('shop') }}"
                                            class="flex items-center justify-center rounded-md border border-transparent buttonGneral px-6 py-3 text-base font-medium shadow-sm ">Continuar
                                            comprando</a>
                                    </div>
                                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                        <p>
                                            o
                                            <a href="{{ route('cart.index') }}">
                                                <button type="button"
                                                    class="font-medium text-amber-600 hover:text-amber-700">
                                                    Ir al carrito
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
