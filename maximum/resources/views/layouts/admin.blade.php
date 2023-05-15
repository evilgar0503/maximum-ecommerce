<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/custom/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/admin.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/inputs.css">



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="css/main.css">
    <script src="/js/custom/navbar.js"></script>

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="flex items-center justify-center ">
        @include('layouts.navigation')
        <div class="p-0 w-3/5 mx-auto grid grid-cols-5 mt-24 gap-12">
            <!-- Navigation -->
            <div class="text-black lg:py-10 sm:rounded-xl flex lg:flex-col">
                <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-5 dashboardMenu">
                    <!-- ICONO PERFIL -->
                    {{-- <a class="text-white w-full p-4 inline-flex justify-center rounded-md mt-5"
                        href="{{ route('shop') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        <span class="px-4">Productos</span>
                    </a>
                    <!-- ICONO RESERVAS -->
                    <a class=" p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover"
                        href="#">
                        Hola
                    </a> --}}
                    <div class="w-full p-4 text-justify">
                        <div>
                            <h1 class="font-bold text-md mb-2">Mis datos</h1>
                            <hr class="bg-black">
                            <ul class="my-2 text-gray-400">
                                <a href="{{ route('dashboard') }}">
                                    <li>Perfil</li>
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <li>Direcciones</li>
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <li>Contraseña</li>
                                </a>
                            </ul>
                        </div>
                        <div>
                            <h1 class="font-bold text-md mb-2">Pedidos</h1>
                            <hr class="bg-black">
                            <ul class="my-2 text-gray-400">
                                <a href="{{ route('dashboard') }}">
                                    <li>Mis pedidos</li>
                                </a>
                            </ul>
                        </div>
                        <div>
                            <h1 class="font-bold text-md mb-2">Productos</h1>
                            <hr class="bg-black">
                            <ul class="my-2 text-gray-400">
                                <a href="{{ route('dashboard') }}">
                                    <li>Mis favoritos</li>
                                </a>
                                <a href="{{ route('shop') }}">
                                    <li>Tienda</li>
                                </a>
                            </ul>
                        </div>
                        <div>
                            <h1 class="font-bold text-md mb-2">Cerrar sesión</h1>
                            <hr class="bg-black">
                            <ul class="my-2 text-gray-400">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout')}}">
                                        <li>
                                            <button type="submit" class="flex">Cerrar sesión
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    class=" ml-4 my-auto" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <rect width="16" height="16" fill="url(#pattern0)" />
                                                    <defs>
                                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                            width="1" height="1">
                                                            <use xlink:href="#image0_9_2" transform="scale(0.0625)" />
                                                        </pattern>
                                                        <image id="image0_9_2" width="16" height="16"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAAbwAAAG8B8aLcQwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAADMSURBVDiNpdMxLkRhFAXg7zAMC5DYh4jCtFqFhkUoJDZgAzrbIAoamUZDbEOlEoVkaFyNyODNy3vmJqf5759zzj25F7Zwi7cGTLBfVWYhuMMSTv2twnVVvTb0fnw6aFNpw0Ib83QlWUtylGR5+r0zARZxgoskw94EVfWEHWzjMsnKd0+PDLCBZ9xgddCklmSEwxZDj19uzvtkMHu8eUbo5SDJJsZ4wG5VTTo7wDpecIVh70XCB86wV1Xv/87gNwa4x3GSJtVOxzTXOX8Cu5gU7fzwuqEAAAAASUVORK5CYII=" />
                                                    </defs>
                                                </svg></button>
                                        </li>
                                    </a>
                                </form>
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
            <!-- Content -->
            <div class="col-start-2 col-span-4 px-2 sm:px-0">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
