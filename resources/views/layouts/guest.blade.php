<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'G-Client') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" >

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900" style="background-image: url('{{ asset('img/auth.jpg') }}'); background-size: cover;">

            {{-- <div> --}}
                <br> <br>
                {{-- <h2 style="font-size: 3em;color: white; font-weight: bold;"> Login</h2> --}}
                {{-- <a href="https://techsysmedia-dz.com/">
                    <img src="{{url('img/logo tech.png')}}" alt="" width="40px;">
                </a> --}}
                {{-- <h1 style="text-align: center; color: white;font-weight: bold;"> Se connecter</h1> --}}

            {{-- </div> --}}

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

</html>
