<x-guest-layout>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="text-white font-bold text-xl">
                    <a href="/">
                        Inicio
                    </a>
                </div>
                <div class="flex items-center">
                    <a class="text-gray-500 hover:text-white mr-4" href="login">Iniciar sesion</a>
                    <a class="text-gray-500 hover:text-white mr-4" href="register">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-3 px-4 py-2">

        <img class="" src="" alt="">
        <h1 class="text-4xl font-bold mb-4">Ayudame a ver</h1>
        <p class="mb-8 text-xl">Aqui podras crear los documentos que quieras en braille</p>
        <p class="mb-8 text-xl">La cual sera una forma de pode implementar estos documentos en tu negocio, ya sea con menús, con algun libro, o bien con algun texto que te gustaria poder implementar en braille</p>
    </div>
    <div class="container mx-auto flex justify-center items-center ">
        <figure class="figure">
            <img src="{{ asset('assets/img/AYUDAME2.png') }}" alt="Ayudame a ver" class="w-full h-full">
            <figcaption class="caption text-lg">Ayudame A Ver</figcaption>
        </figure>

    </div>
    <div class="container mx-auto mt-5 px-3 py-8">
        <div class="grid grid-cols-4 gap-5">
            <div>
                <img src="{{ asset('assets/img/imagen_de_tablet_braille.jpg') }}" alt="Imagen" class="w-full h-full">
                <p class="text-2xl">Tableta braille</p>
            </div>
            <div>
                <img src="{{ asset('assets/img/libro_braille.jfif') }}" alt="Imagen" class="w-full h-full">
                <p class="text-2xl">Libro en braille</p>
            </div>
            <div>
                <img src="{{ asset('assets/img/bastones.png') }}" alt="Imagen" class="w-full h-full">
                <p class="text-2xl">Diferencias entre los bastones de personas invidentes</p>
            </div>
            <div >
                <img src="{{ asset('assets/img/menu_braille.jfif') }}" alt="Imagen" class="w-full h-full">
                <p class="text-2xl">Menú en braille</p>
            </div>
        </div>
    </div>
</x-guest-layout>
