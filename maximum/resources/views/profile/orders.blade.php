@extends('layouts.admin')
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="p-4 flex flex-col gap-5 ">
        <h1 class="w-full font-bold pb-2 border-b border-amber-500">Mis pedidos</h1>
        @foreach (auth()->user()->pedidos as $order)
            <div class="p-3 bg-gray-100 flex flex-col gap-3 shadow-md rounded text-xs">
                <div class="w-full flex flex-row justify-between  gap-4">
                    <div class="font-bold flex flex-row grow gap-4">
                        <div>Pedido: <br>{{ Carbon::parse($order->fecha)->format('d-m-Y') }}</div>
                        <div>Cód. Seguimiento: <br>{{$order->cod_seguimiento}}</div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-2">
                        <button class="py-2 px-3 bg-white rounded shadow-sm hover:scale-105"> Factura </button>
                        <button class="py-2 px-3 bg-white rounded shadow-sm hover:scale-105"> Ver más </button>
                    </div>
                </div>
                <hr>
                <div class="w-full flex flex-row justify-between gap-4">
                    <div class="font-bold flex flex-row gap-4">
                        <div>Estado: <br><span class="uppercase text-amber-700">{{ $order->estado }}</span></div>
                    </div>
                </div>
                <hr>
                <div class="flex flex-col gap-2">
                    @foreach ($order->productosPedido()->get() as $product)
                    <div class="flex flex-col justify-between lg:flex-row text-xs gap-4 mt-2">
                        <div class="flex flex-row gap-4">
                            <div class="w-24 h-full lg:h-24 lg:w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <img src="/{{ $product->ruta_imagen }}"
                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="lg:w-full flex grow flex-col lg:mx-2">
                                <div>{{$product->nombre}}</div>
                                <div class="font-bold">{{$product->precio}} €</div>
                                <div>X<span class="text-sm">{{$product->pivot->cantidad}}</span> Unidades</div>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex flex-col gap-2">
                                <button class="py-2 px-3 bg-white  rounded shadow-sm hover:scale-105"> Valorar producto </button>
                                <button class="py-2 px-3 bg-amber-600 text-white rounded shadow-sm hover:scale-105"> Comprar de nuevo </button>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

        @endforeach

    </div>
@endsection
