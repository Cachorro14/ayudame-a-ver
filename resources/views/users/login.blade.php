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
            rel="shortcut icon"
            href="{{ asset('assets/img/AYUDAME2.ico') }}"
        />
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Ayudame a ver</title>
        @livewireStyles
    </head>
    <body style="background: #edf2f7">
        <div
            class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900"
        >
            <div
                class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
            >
                <livewire:login-component />
            </div>
        </div>
        @livewireScripts
    </body>
</html>
