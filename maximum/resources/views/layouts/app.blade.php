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
    <link rel="stylesheet" type="text/css" href="/css/custom/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/home.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/inputs.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/contact.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/blog.css">



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/js/custom/navbar.js"></script>
    <script src="/js/custom/home.js"></script>
    <script src="/js/custom/notice.js"></script>
    <script src="https://cdn.tiny.cloud/1/56oujekm1gcury9eogc9d77b4uh144jkkyl7euz4blokqi7j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#tinymce'
        });
    </script>



</head>

<body class="antialiased overflow-x-hidden">
    <div class="min-h-screen ">
        @include('layouts.navigation')

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
</body>

</html>
