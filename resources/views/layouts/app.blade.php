<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Blog') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />
    
        @include('layouts.partials.header')
        
        @yield('hero')

        <main class="container mx-auto px-5 flex flex-grow">
            {{ $slot }}
        </main>
    
        @include('layouts.partials.footer')
    
        @stack('modals')
        @livewireScripts
    </body>

</html>
