<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/tailwind.output.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/loaders.css') }}"
        />
        <link rel="shortcut icon" href="{{asset('assets/img/AYUDAME2.ico')}}">
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
        ></script>
        <title>Ayudame a ver</title>
        @livewireStyles
    </head>
    <body
        style="background: #edf2f7"
    >
        @yield('content')
        @yield('scripts')
        
        @livewireScripts

    </body>
</html>
