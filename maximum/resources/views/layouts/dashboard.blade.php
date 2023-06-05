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
    <link rel="stylesheet" type="text/css" href="/css/custom/order.css">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="css/main.css">
    <script src="/js/custom/navbar.js"></script>


    @livewireStyles
</head>

<body class="font-sans antialiased min-h-full">
    <div class="">
        {{-- @include('layouts.navigation') --}}
        <div class="">
            <!-- Navigation -->
            <nav class="fixed top-0 z-50 w-full">
                <div class="px-3 lg:px-5 lg:pl-3" style="background-color: #212121;">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                            <button type="button" data-drawer-target="drawer-navigation"
                                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                                onclick="desplegarSideBarAdmin()"
                                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </button>
                            <a href="{{ route('home') }}">
                                <x-application-logo class="block w-auto fill-current " />
                            </a>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center ml-3">
                                <div>
                                    <button type="button" onclick="desplegarMenuUser()"
                                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 "
                                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                        <span class="sr-only">Abrir menu</span>
                                        <img class="w-8 h-8 rounded-full"
                                            src="/storage/{{ auth()->user()->ruta_imagen }}" alt="user photo">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <aside id="user-navigation"
                class="w-full lg:w-1/5 fixed top-0 right-0 z-40 h- lg:h-fit pt-20 transition-transform border-r border-gray-200 hidden text-gray-300"
                aria-label="Sidebar" style="background-color: #212121;">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-white" role="none">
                        {{ auth()->user()->nombre }} {{ auth()->user()->apellidos }}
                    </p>
                    <p class="text-sm font-medium text-white truncate" role="none">
                        {{ auth()->user()->email }}
                    </p>
                </div>
                <ul class="py-1" role="none">
                    <li>
                        <a href="{{ route('admin.index') }}"
                            class="block px-4 py-2 text-sm  hover:bg-gray-100 hover:no-underline"
                            role="menuitem">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm  hover:bg-gray-100 hover:no-underline"
                            role="menuitem">Configuración</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm  hover:bg-gray-100 hover:no-underline"
                            role="menuitem">Earnings</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 hover:no-underline" role="menuitem">
                            @csrf
                            <input type="submit" value="Cerrar sesión">

                        </form>
                    </li>
                </ul>
            </aside>

            <aside id="drawer-navigation"
                class="w-full lg:w-1/5 fixed top-0 left-0 z-40 h-screen pt-20 transition-transform border-r border-gray-200 block lg:block"
                aria-label="Sidebar" style="background-color: #212121;">
                <div class="h-full pb-4 overflow-y-auto" style="background-color: #212121;">
                    <ul class="space-y-1 font-medium menuAdmin">
                        <li
                            class="hover:bg-gray-100  {{ Route::currentRouteNamed('admin.index') ? 'active' : 'text-white' }}">
                            <a href="{{ route('admin.index') }}" class="flex items-center p-2 ">
                                <svg aria-hidden="true"
                                    class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-white hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full">Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-white hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                    </path>
                                    <path
                                        d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                    </path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                <span
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                            </a>
                        </li>
                        <li
                            class="hover:bg-gray-100   {{ Route::currentRouteNamed('admin.users') ? 'active' : 'text-white' }}">
                            <a href="{{ route('admin.users') }}"
                                class="flex items-center p-2 hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Usuarios</span>
                            </a>
                        </li>
                        <li
                            class="hover:bg-gray-100   {{ Route::currentRouteNamed('admin.products') ? 'active' : 'text-white' }}">
                            <a href="{{ route('admin.products') }}"
                                class="flex items-center p-2 hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Productos</span>
                            </a>
                        </li>
                        <li
                            class="hover:bg-gray-100   {{ Route::currentRouteNamed('admin.pago') ? 'active' : 'text-white' }}">
                            <a href="{{ route('admin.pago') }}"
                                class="flex items-center p-2 hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Métodos Pago</span>
                            </a>
                        </li>
                        <li
                            class="hover:bg-gray-100   {{ Route::currentRouteNamed('admin.envio') ? 'active' : 'text-white' }}">
                            <a href="{{ route('admin.envio') }}"
                                class="flex items-center p-2 hover:bg-gray-100 hover:text-gray-900">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Métodos Envio</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Content -->
            <div class="w-full lg:w-4/5 ml-auto mt-24">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="/js/custom/alerts.js"></script>
    <script src="https://cdn.tiny.cloud/1/56oujekm1gcury9eogc9d77b4uh144jkkyl7euz4blokqi7j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</body>

</html>
