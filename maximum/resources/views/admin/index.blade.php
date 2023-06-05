@extends('layouts.dashboard')

@section('content')
    <div class="w-full flex flex-col gap-4 lg:flex-row justify-around text-white">
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 sm:h-28">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-xl min-h-full hover:scale-105 duration-200">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Pedidos Pendientes
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{ $ordersPendientes }}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-700">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 sm:h-28">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg min-h-full hover:scale-105 duration-200">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Usuarios registrados
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{ $users }}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                <i class="fas fa-cash-register	"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 sm:h-28">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg min-h-full hover:scale-105 duration-200">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Productos registrados
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{ $productos }}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 sm:h-28">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg min-h-full hover:scale-105 duration-200">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Vendido este mes
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{ $vendido }} €
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-purple-500">
                                <i class="fas fa-money-bill	"></i>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-500 mt-4">
                        <span class="text-red-500 mr-2">
                            <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                        <span class="whitespace-no-wrap">
                            Since last week
                        </span>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 flex flex-col lg:flex-row gap-8 p-4">
        <div class="border border-gray-400 p-2 w-full lg:w-1/2 bg-gray-100">
            <h1 class="mb-1 font-semibold">Últimos Avisos Recibidos</h1>
            <hr>
            <div class="flex flex-col gap-1 bg-gray-100">
                <div class="py-2 flex flex-row">
                    <div class="w-1/5 font-semibold">
                        Nombre
                    </div>
                    <div class="w-2/5 font-semibold">
                        Asunto
                    </div>
                    <div class="w-2/5 font-semibold">
                        Recibido
                    </div>
                </div>
                @foreach ($avisos as $aviso)
                    <div class="py-2 flex flex-row hover:bg-gray-200">
                        <div class="w-1/5">
                            {{$aviso->nombre}}
                        </div>
                        <div class="w-2/5">
                            {{$aviso->asunto}}
                        </div>
                        <div class="w-2/5">
                            {{$aviso->created_at}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="border border-gray-400 p-2 w-full lg:w-1/2 bg-gray-100">
            <h1 class="mb-1 font-semibold text-md">Últimos Usuarios Registrados</h1>
            <hr>
            <div class="flex flex-col gap-1 bg-gray-100">
                <div class="py-2 flex flex-row">
                    <div class="w-1/5 flex justify-center font-semibold">
                        Foto
                    </div>
                    <div class="w-2/5 font-semibold">
                        Nombre
                    </div>
                    <div class="w-2/5 font-semibold">
                        Registro
                    </div>
                </div>
                @foreach ($registrados as $user)
                    <div class="py-2 flex flex-row hover:bg-gray-200">
                        <div class="w-1/5 flex justify-center">
                            <img src="/storage/{{$user->ruta_imagen}}" class="w-8 h-8">
                        </div>
                        <div class="w-2/5">
                            {{$user->nombre . $user->apellidos}}
                        </div>
                        <div class="w-2/5">
                            {{$user->created_at}}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    {{-- <div class="border border-gray-400 mx-4 bg-gray-100 p-4">
        <h1 class="mb-1 font-semibold text-md">Últimos Pedidos Realizados</h1>
        <hr>
        <div class="flex flex-col gap-1 bg-gray-100 text-center">
            <div class="py-2 flex flex-row ">
                <div class="font-semibold">
                    Fecha Pedido
                </div>
                <div class="font-semibold">
                    Cod. Seguimiento
                </div>
                <div class="font-semibold">
                    Estado
                </div>
                <div class="font-semibold">
                    Precio Total
                </div>
            </div>
            @foreach ($pedidos as $pedido)
                <div class="py-2 flex flex-row gap-8 hover:bg-gray-200 ">
                    <div class="">
                        {{$pedido->fecha}}
                    </div>
                    <div class="  ">
                        {{$pedido->cod_seguimiento}}
                    </div>

                    <div class=" ">
                        {{$pedido->estado}}
                    </div>
                    <div class="">
                        {{$pedido->precio_total}} €
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
@endsection
