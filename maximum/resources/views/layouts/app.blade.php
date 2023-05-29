<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/custom/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/home.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/inputs.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/contact.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/blog.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/carrousel.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/order.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/js/custom/home.js"></script>
    <script src="/js/custom/notice.js"></script>
    <script src="/js/custom/inputs.js"></script>
    <script src="js/custom/navbar.js"></script>
    <script src="https://cdn.tiny.cloud/1/56oujekm1gcury9eogc9d77b4uh144jkkyl7euz4blokqi7j/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#tinymce'
        });
    </script>

    @livewireStyles

</head>

<body class="antialiased overflow-x-hidden">
    @include('layouts.navigation')
    <div class="min-h-screen ">

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')

    </div>

    <script src="/js/custom/product.js"></script>
    <script src="/js/custom/carrousel.js"></script>
    <script src="js/custom/alerts.js"></script>
    <script src="/js/custom/cart.js"></script>
    <script src="/js/custom/valoraciones.js"></script>
    @livewireScripts
</body>

</html>
