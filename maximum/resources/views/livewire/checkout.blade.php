<div class="flex flex-col lg:flex-row gap-8 mt-8">
    <div class=" w-full p-3 lg:w-3/5">
        <form method="POST" action="{{ route('checkout.review') }}">
            @csrf
            <div class="w-full font-bold p-1 border-b border-amber-500">
                Información de envio
            </div>
            <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                <div class="mt-4 flex flex-row w-full gap-4">
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">Nombre</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="nombreEnv" value="{{ auth()->user()->nombre }}">
                        <x-input-error :messages="$errors->get('nombreEnv')" class="mt-2" />

                    </div>
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">Apellidos</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="apellidosEnv" value="{{ auth()->user()->apellidos }}">
                        <x-input-error :messages="$errors->get('apellidosEnv')" class="mt-2" />

                    </div>
                </div>
                <div>
                    <label class="font-semibold text-xs mb-2">Dni</label>
                    <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text" name="dniEnv"
                        value="{{ auth()->user()->dni }}">
                    <x-input-error :messages="$errors->get('dniEnv')" class="mt-2" />

                </div>
                <hr>
                <div>
                    <label class="font-semibold text-xs mb-2">Dirección</label>
                    <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                        name="direccionEnv" value="{{ auth()->user()->direccion }}">
                    <x-input-error :messages="$errors->get('direccionEnv')" class="mt-2" />

                </div>
                <div class="flex flex-row w-full gap-4">
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">Código Postal</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="cpEnv" value="{{ auth()->user()->cp }}">
                        <x-input-error :messages="$errors->get('cpEnv')" class="mt-2" />

                    </div>
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">Ciudad</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="ciudadEnv" value="{{ auth()->user()->ciudad }}">
                        <x-input-error :messages="$errors->get('ciudadEnv')" class="mt-2" />

                    </div>
                </div>
                <div class="flex flex-row w-full gap-4">
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">Provincia</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="provinciaEnv" value="{{ auth()->user()->provincia }}">
                        <x-input-error :messages="$errors->get('provinciaEnv')" class="mt-2" />

                    </div>
                    <div class="w-1/2">
                        <label class="font-semibold text-xs mb-2">País</label>
                        <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                            name="paisEnv" value="{{ auth()->user()->pais }}">
                        <x-input-error :messages="$errors->get('paisEnv')" class="mt-2" />

                    </div>
                </div>
                <div>
                    <label class="font-semibold text-xs mb-2">Teléfono</label>
                    <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                        name="telefonoEnv" value="{{ auth()->user()->telefono }}">
                    <x-input-error :messages="$errors->get('telefonoEnv')" class="mt-2" />

                </div>
                <hr>
                <div>
                    <label class="font-semibold text-xs mb-2">Método de envío</label>
                    <select class="w-full text-xs shadow-xl border border-amber-400 p-2" name="envioEnv"
                        wire:model='shipping'>
                        @foreach ($methodShipping as $method)
                            <option value="{{ $method->id }}" wire:key='{{ $method->id }}'>{{ $method->nombre }}
                                - {{ $method->cargo }}€</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="font-semibold text-xs mb-2">Observaciones del pedido</label>
                    <textarea class="w-full text-xs shadow-xl border border-amber-400 p-2 resize-none" type="text" name="notaEnv"
                        rows="5"
                        placeholder="Trataremos de atender su peticién, pero no podemos garantizarlo. No es, por tanto, vinculante contractualmente."></textarea>
                </div>
                <div class="w-full font-bold p-1 border-b border-amber-500">
                    Información del pago
                </div>
                <div class="mx-4 lg:mx-8 flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        @foreach ($methodsPayment as $payment)
                            <div class="flex flex-row gap-2 items-center">
                                <input name="metodopagoEnv" type="radio" value="{{ $payment->nombre }}"
                                    class=" text-xs shadow-xl border border-amber-400 p-1"
                                    @if ($payment->id === 1) checked @endif>
                                <label for="{{ $payment->nombre }}" class="text-xs p-0 m-0">
                                    {{ $payment->nombre }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-row gap-4">
                        <input type="checkbox" name="sameData"
                            class="text-xs shadow-xl border border-amber-400 p-1 text-amber-500"
                            wire:model='facturacionData'>
                        <p class="text-xs">Mi dirección de facturación es la misma que mi dirección de envio.</p>
                    </div>
                </div>
                @if (isset($statusFac) && !$statusFac)
                    <div class="w-full font-bold p-1 border-b border-amber-500">
                        Información de facturación
                    </div>
                    <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                        <div class="mt-4 flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Nombre</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="nombreFac">
                                <x-input-error :messages="$errors->get('nombreFac')" class="mt-2" />

                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Apellidos</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="apellidosFac">
                                <x-input-error :messages="$errors->get('apellidosFac')" class="mt-2" />

                            </div>
                        </div>
                        <div>
                            <label class="font-semibold text-xs mb-2">Dni</label>
                            <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                name="dniFac">
                            <x-input-error :messages="$errors->get('dniFac')" class="mt-2" />

                        </div>
                        <hr>
                        <div>
                            <label class="font-semibold text-xs mb-2">Dirección</label>
                            <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                name="direccionFac">
                            <x-input-error :messages="$errors->get('direccionFac')" class="mt-2" />

                        </div>
                        <div class="flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Código Postal</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="cpFac">
                                <x-input-error :messages="$errors->get('cpFac')" class="mt-2" />

                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Ciudad</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="ciudadFac">
                                <x-input-error :messages="$errors->get('ciudadFac')" class="mt-2" />

                            </div>
                        </div>
                        <div class="flex flex-row w-full gap-4">
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">Provincia</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="provinciaFac">
                                <x-input-error :messages="$errors->get('provinciaFac')" class="mt-2" />

                            </div>
                            <div class="w-1/2">
                                <label class="font-semibold text-xs mb-2">País</label>
                                <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                    name="paisFac">
                                <x-input-error :messages="$errors->get('paisFac')" class="mt-2" />

                            </div>
                        </div>
                        <div>
                            <label class="font-semibold text-xs mb-2">Teléfono</label>
                            <input class="w-full text-xs shadow-xl border border-amber-400 p-2" type="text"
                                name="telefonoFac">
                            <x-input-error :messages="$errors->get('telefonoFac')" class="mt-2" />

                        </div>
                    </div>
                @endif
                <div class="mx-2 lg:mx-8 flex flex-col gap-4">
                    <input type="submit" class="buttonGeneral py-3 px-3 mr-auto" value="Continuar a revisión">
                </div>

            </div>
        </form>
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
                <p>Gastos de envío: {{ $shippingMethod }}€</p>
                <p>Total: {{ floatval(\Cart::getTotal()) + $shippingMethod }}€</p>
                @if (isset($status))
                    {{ dump($status) }}
                @endif
            </div>
        </div>

    </div>
</div>
