<nav x-data="{ open: false }" class="navbar p-0 fixed top-0 w-full">

    <!-- Primary Navigation Menu -->
    <div class="w-full lg:mx-16 px-2 sm:px-6 lg:px-8">
        <div class="flex h-16 mx-auto ">
            <div class="flex justify-between w-5/6">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current " />
                    </a>
                </div>
                <div class="flex flex-row flex-1 w-full">
                    <div class="hidden  space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                            {{ __('Tienda') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden  space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                            {{ __('Contactar') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden  space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </div>
                </div>
                @if (isset(auth()->user()->id))
                    @if (auth()->user()->rol == 'admin')
                    <a href="{{route('admin.index')}}">
                        <button class=" rounded my-3 mr-3 px-3 py-1.5 bg-white text-amber-600 hidden lg:block">
                            Administración
                        </button>
                    </a>
                    @endif
                @endif


                <div class="my-auto">
                    <x-sidebar align="right">
                        <x-slot name="trigger">
                            <button>
                                <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity() }}
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @include('shop.cart-drop')
                        </x-slot>
                    </x-sidebar>
                </div>
                @auth
                @else
                    <div class="flex flex-row">
                        <div class="hidden  space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                {{ __('Iniciar Sesión') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden  space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                {{ __('Registrarse') }}
                            </x-nav-link>
                        </div>
                    </div>
                @endauth
            </div>
            @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-white focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->nombre }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Configuración') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('myOrders')">
                                {{ __('Mis pedidos') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                <!-- Hamburger -->
                <div class="flex items-center sm:hidden mr-4 ml-3">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @else
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endauth

        </div>
    </div>

    <!-- Responsive Navigation Menu -->

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden justify-between w-100">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                {{ __('Tienda') }}
            </x-responsive-nav-link>
            {{-- <x-responsive-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                {{ __('Contactar') }}
            </x-responsive-nav-link> --}}
            <x-responsive-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
        </div>
        @auth

            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('myOrders')">
                        {{ __('Mis pedidos') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.index')">
                        {{ __('Administración') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')">
                        {{ __('Configuración') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Iniciar Sesión') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{ __('Registrarse') }}
            </x-responsive-nav-link>
        @endauth
        <!-- Responsive Settings Options -->

    </div>
</nav>
