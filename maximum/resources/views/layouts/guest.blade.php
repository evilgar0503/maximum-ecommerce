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
        <link rel="stylesheet" type="text/css" href="css/custom/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/custom/inputs.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="js/custom/navbar.js"></script>
    </head>
    <body class="font-sans antialiased overflow-x-hidden">
        @include('layouts.navigation')

        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">

            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            {{ $slot }}

        </div>
        @include('layouts.footer')

    </body>
</html>
