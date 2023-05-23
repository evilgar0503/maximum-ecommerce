<x-app-layout>
    <div class="lg:mx-36 my-32">
        <div class="w-full lg:w-3/4 px-4 lg:mx-auto flex flex-row justify-around gap-2 font-light">
            <div class="flex flex-col gap-2 w-1/3 lg:-mr-60 opacity-60">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                </div>
                <div class="text-center font-semibold">
                    <span class="text-sm ">Información del pedido</span>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/3 ">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path
                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                </div>
                <div class="text-center">
                    <span class="text-sm ">Revisión</span>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/3 lg:-ml-60 opacity-60">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z" />
                    </svg>
                </div>
                <div class="text-center">
                    <span class="text-sm ">Completo</span>
                </div>
            </div>

        </div>

        <div class="flex flex-col lg:flex-row gap-8 mt-8">
            <div class=" w-full p-3 lg:w-3/5">


                <div class="w-full font-bold p-1 border-b border-amber-500">
                    Información de envio
                </div>
                <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                    <form method="POST" action="{{ route('order.complete') }}">
                        @csrf
                        @method('post')
                        <div class="mt-2 flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Nombre</label>
                                <p class="text-xs">{{ $datos->nombreEnv }}</p>
                                <input type="hidden" name="nombreEnv" value="{{ $datos->nombreEnv }}">
                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Apellidos</label>
                                <p class="text-xs">{{ $datos->apellidosEnv }}</p>
                                <input type="hidden" name="apellidosEnv" value="{{ $datos->apellidosEnv }}">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="font-semibold text-xs mb-2">Dni</label>
                            <p class="text-xs">{{ $datos->dniEnv }}</p>
                            <input type="hidden" name="dniEnv" value="{{ $datos->dniEnv }}">

                        </div>
                        <hr>
                        <div>
                            <label class="font-semibold text-xs mb-2">Dirección</label>
                            <p class="text-xs">{{ $datos->direccionEnv }}</p>
                            <input type="hidden" name="direccionEnv" value="{{ $datos->direccionEnv }}">

                        </div>
                        <div class="flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Código Postal</label>
                                <p class="text-xs">{{ $datos->cpEnv }}</p>
                                <input type="hidden" name="cpEnv" value="{{ $datos->cpEnv }}">

                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Ciudad</label>
                                <p class="text-xs">{{ $datos->ciudadEnv }}</p>
                                <input type="hidden" name="ciudadEnv" value="{{ $datos->ciudadEnv }}">
                            </div>
                        </div>
                        <div class="flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Provincia</label>
                                <p class="text-xs">{{ $datos->provinciaEnv }}</p>
                                <input type="hidden" name="provinciaEnv" value="{{ $datos->provinciaEnv }}">

                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">País</label>
                                <p class="text-xs">{{ $datos->paisEnv }}</p>
                                <input type="hidden" name="paisEnv" value="{{ $datos->paisEnv }}">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="font-semibold text-xs mb-2">Teléfono</label>
                            <p class="text-xs">{{ $datos->telefonoEnv }}</p>
                            <input type="hidden" name="telefonoEnv" value="{{ $datos->telefonoEnv }}">
                        </div>
                        <hr>
                        <div class="mt-2">
                            <label class="font-semibold text-xs mb-2">Método de envío</label>
                            <p class="text-xs">{{ $metodoEnvio->nombre }} - {{ $metodoEnvio->cargo }}€</p>
                            <input type="hidden" name="envioEnv" value="{{ $metodoEnvio->id }}">
                        </div>
                        <div class="mt-2">
                            <label class="font-semibold text-xs mb-2">Observaciones del pedido</label>
                            @if ($datos->notaEnv != null)
                                <p class="text-xs">{{ $datos->notaEnv }}</p>
                                <input type="hidden" name="envioEnv" value="{{ $datos->notaEnv }}">
                            @else
                                <p class="text-xs text-gray-500">No ha introducido ninguna nota en el pedido.</p>
                            @endif
                        </div>
                        <div class="w-full font-bold p-1 border-b border-amber-500  mt-2">
                            Información del pago
                        </div>
                        <div class="mx-4 lg:mx-8 flex flex-col gap-6 ">
                            <div class="flex flex-col gap-4 mt-3">
                                <p class="text-xs flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-cash-coin mr-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                        <path
                                            d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                        <path
                                            d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                        <path
                                            d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                    </svg>
                                    {{ $metodoPago->nombre }}
                                </p>
                                <input type="hidden" name="metodopagoEnv" value="{{ $metodoPago->id }}">
                            </div>
                            <div class="flex flex-row gap-4">
                                <input type="checkbox" name="sameData"
                                    class="text-xs shadow-xl border border-amber-400 p-1 text-amber-500"
                                    wire:model='facturacionData' @if ($datos->sameData) checked @endif
                                    disabled>
                                <p class="text-xs">Mi dirección de facturación es la misma que mi dirección de envio.
                                </p>
                            </div>
                        </div>
                        @if (!$datos->sameData)
                            <div class="w-full font-bold p-1 border-b border-amber-500">
                                Información de facturacion
                            </div>
                            <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                                <div class="mt-4 flex flex-row w-full gap-4">
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">Nombre</label>
                                        <p class="text-xs">{{ $datos->nombreFac }}</p>
                                        <input type="hidden" name="nombreFac" value="{{ $datos->nombreFac }}">
                                    </div>
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">Apellidos</label>
                                        <p class="text-xs">{{ $datos->apellidosFac }}</p>
                                        <input type="hidden" name="apellidosFac"
                                            value="{{ $datos->apellidosFac }}">
                                    </div>
                                </div>
                                <div>
                                    <label class="font-semibold text-xs mb-2">Dni</label>
                                    <p class="text-xs">{{ $datos->dniFac }}</p>
                                    <input type="hidden" name="dniFac" value="{{ $datos->dniFac }}">

                                </div>
                                <hr>
                                <div>
                                    <label class="font-semibold text-xs mb-2">Dirección</label>
                                    <p class="text-xs">{{ $datos->direccionFac }}</p>
                                    <input type="hidden" name="direccionFac" value="{{ $datos->direccionFac }}">

                                </div>
                                <div class="flex flex-row w-full gap-4">
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">Código Postal</label>
                                        <p class="text-xs">{{ $datos->cpFac }}</p>
                                        <input type="hidden" name="cpFac" value="{{ $datos->cpFac }}">

                                    </div>
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">Ciudad</label>
                                        <p class="text-xs">{{ $datos->ciudadFac }}</p>
                                        <input type="hidden" name="ciudadFac" value="{{ $datos->ciudadFac }}">
                                    </div>
                                </div>
                                <div class="flex flex-row w-full gap-4">
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">Provincia</label>
                                        <p class="text-xs">{{ $datos->provinciaFac }}</p>
                                        <input type="hidden" name="provinciaFac"
                                            value="{{ $datos->provinciaFac }}">

                                    </div>
                                    <div class="w-1/2">
                                        <label class="font-semibold text-xs mb-2">País</label>
                                        <p class="text-xs">{{ $datos->paisFac }}</p>
                                        <input type="hidden" name="paisFac" value="{{ $datos->paisFac }}">
                                    </div>
                                </div>
                                <div>
                                    <label class="font-semibold text-xs mb-2">Teléfono</label>
                                    <p class="text-xs">{{ $datos->telefonoFac }}</p>
                                    <input type="hidden" name="telefonoFac" value="{{ $datos->telefonoFac }}">
                                </div>
                                <hr>
                        @endif
                        <input type="hidden" name="precioFinal" value="{{ floatval(\Cart::getTotal()) + $metodoEnvio->cargo }}">
                        <input type="hidden" name="sameData" value="{{$datos->sameData}}">
                        <div class="flex flex-row mt-4">
                            <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                                <input type="submit" class="buttonGeneral py-3 px-3 mr-auto"
                                    value="Confirmar pedido">
                            </div>
                    </form>
                    <form action="{{ route('checkout', ['volver' => '1']) }}">
                        @csrf
                        <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                            <input type="submit" class="buttonGeneral py-3 px-3 mr-auto" value="Modificar datos">
                        </div>
                    </form>
                </div>

            </div>


        </div>
        <div class="w-full lg:w-2/5 p-3 border-t-2 border-amber-500 lg:border-0">
            <div class="w-full font-bold p-1 border-b border-amber-500 lg:w-4/6">
                Resumen del pedido
            </div>
            <div class="mt-2 w-full lg:w-4/6">
                @foreach ($cartCollection as $item)
                    <div class="text-xs flex flex-row  p-1 border-b border-gray-500">
                        <div class="w-1/6">{{ $item->quantity }} x</div>
                        <div class="w-4/6"> {{ $item->name }}</div>
                        <div class="w-1/6 text-end"> {{ \Cart::get($item->id)->getPriceSum() }}€</div>
                    </div>
                @endforeach
                <div class="text-xs text-end  ml-auto mt-2">

                    <p>Subtotal: {{ \Cart::getTotal() }}€</p>
                    <p>Iva Incluido: {{ number_format(\Cart::getTotal() - \Cart::getTotal() / 1.21, 2) }}€</p>
                    <p>Gastos de envío: {{ $metodoEnvio->cargo }}€</p>
                    <p>Total: {{ floatval(\Cart::getTotal()) + $metodoEnvio->cargo }}€</p>
                    @if (isset($status))
                        {{ dump($status) }}
                    @endif
                </div>
            </div>

        </div>
    </div>

    </div>

</x-app-layout>
