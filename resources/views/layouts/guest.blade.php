<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/tailwind.output.css') }}"
        />

        <link
        rel="shortcut icon"
        href="{{ asset('assets/img/AYUDAME2.ico') }}"
        />
        
        <title>Ayudame a ver</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background: #edf2f7">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
    @yield('scripts')
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
