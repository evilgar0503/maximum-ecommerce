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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/custom/navbar.js"></script>
</head>

<body class="font-sans antialiased overflow-x-hidden">
    @include('layouts.navigation')

    <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 my-auto">

        <div class="my-auto h-2/5 w-full px-3 flex flex-col items-center">
                <a href="/" >
                    <x-application-logo class="w-40 mx-auto h-40 fill-current text-gray-500" />
                </a>
            {{ $slot }}
        </div>


    </div>
    @include('layouts.footer')

</body>

</html>
