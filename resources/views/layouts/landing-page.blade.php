<x-guest-layout>
    <header class="fixed top-0 left-0 right-0 z-30 bg-gray-800 text-white">
        <nav class="border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <img src="{{ asset('assets/img/AYUDAME2.png') }}" class="rounded-2xl mr-3 h-6 sm:h-9"
                        alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Ayúdame a
                        ver</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="login"
                    class="lg:flex bg-slate-400 text-gray-6 dark:text-white hover:text-slate-800 hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-500 dark:bg-slate-900 focus:outline-none dark:focus:ring-gray-800 hidden">
                    Iniciar sesión
                </a>
                <a href="register"
                    class="lg:flex text-center text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-500 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 hidden"><svg
                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <path
                            d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                    </svg>
                    <span class="px-2"> Crear cuenta</span></a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Abrir menú</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <button
                                class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:text-white hover:bg-gray-50 focus:text-white focus:outline-none lg:hover:bg-transparent lg:border-0 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                onclick="scrollToSection('section')">Inicio</button>
                        </li>
                        <li>
                            <button
                                class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:text-white hover:bg-gray-50 focus:text-white focus:outline-none lg:hover:bg-transparent lg:border-0 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                onclick="scrollToSection('section1')">Braille</button>
                        </li>
                        <li>
                            <button
                                class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:text-white hover:bg-gray-50 focus:text-white focus:outline-none lg:hover:bg-transparent lg:border-0 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                onclick="scrollToSection('section2')">¿Qué es Ayúdame a ver?</button>
                        </li>

                        <li>
                            <button
                                class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:text-white hover:bg-gray-50 focus:text-white focus:outline-none lg:hover:bg-transparent lg:border-0 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                                onclick="scrollToSection('section4')">Contacto</button>
                        </li>
                        <li class="mt-5">
                            <a href="login"
                                class="bg-slate-400 text-gray-6 dark:text-white hover:text-slate-800 hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-500 dark:bg-slate-900 focus:outline-none dark:focus:ring-gray-800 lg:hidden">
                                Iniciar sesión
                            </a>
                        </li>
                        <li class="mt-5">
                            <a href="register"
                                class="flex text-center text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-500 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-40 lg:hidden"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                </svg>
                                <span class="px-2"> Crear cuenta</span></a>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-slate-200 dark:bg-gray-900 mt-10 lg:mt-0" id="section">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Ayúdame A ver</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Una
                    página creada para poder ayudar a los establecimientos que quieren incluir a las personas con
                    dificultad de visión</p>
                <a href="register"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Crear Cuenta
                    <svg class="w-6 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                <img class="rounded-lg" src="{{ asset('assets/img/AYUDAME2.png') }}" alt="mockup">
            </div>
        </div>
    </section>

    <section class="bg-slate-200 dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2
                class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                Vamos a ver un poco mas...</h2>
        </div>
        <div class="flex justify-center text-center">
            <a href="#section1">
                <div
                    class="animate-bounce bg-white dark:bg-slate-800 p-2 w-10 h-10 ring-1 ring-slate-900/5 dark:ring-slate-200/20 shadow-lg rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-sky-700" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </a>

        </div>
    </section>
    <section class="bg-slate-400 dark:bg-gray-800" id="section1">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Braille</h2>
                <p class="text-gray-600 sm:text-xl dark:text-gray-400">Un poco como la historia de como el braille
                    comenzó y que bases
                    tomó para usarse, además de lo que es y en qué consiste.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Historia</h3>
                    <p class="text-gray-600 dark:text-gray-400">Es un sistema de lectura y escritura táctil pensado
                        para
                        personas ciegas. Se conoce también como cecografía. Fue ideado
                        a mediados del siglo XIX por el francés Louis Braille (1809-1852), que se quedó ciego debido a
                        un accidente durante su niñez mientras jugaba en el taller de su padre.</p>
                </div>
                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M254 52.8C249.3 40.3 237.3 32 224 32s-25.3 8.3-30 20.8L57.8 416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32h-1.8l18-48H303.8l18 48H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H390.2L254 52.8zM279.8 304H168.2L224 155.1 279.8 304z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Alfabeto español</h3>
                    <p class="text-gray-600 dark:text-gray-400">a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r,
                        s,
                        t, u, v, w, x, y, z, A
                    </p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">Caracteres especiales:</p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">
                        á , é , í , ó , ú , ü , ñ
                        '.', ',', ';', ':', '-',
                        '?', '!', '"', '(', ')', '*',
                        '$','%', '=', '+', '#',
                        '|', '\'', '/', '\\', '{', '}',
                        '[', ']', '@', '&', '¿', '¡'
                    </p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">Numeros:</p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 0
                    </p>
                </div>

                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300"
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 96a64 64 0 1 1 128 0A64 64 0 1 1 0 96zM224 272a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM80 416a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zM0 416a64 64 0 1 1 128 0A64 64 0 1 1 0 416zm240 0a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM64 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM224 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM352 96a64 64 0 1 1 128 0A64 64 0 1 1 352 96zm240 0a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0A64 64 0 1 1 512 96zm64 176a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm16 224a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM416 272a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm16 224a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Braille español</h3>
                    <p class="text-gray-600 dark:text-gray-400">En el braille español, los códigos de las letras
                        minúsculas, la mayoría de los signos de puntuación, algunos caracteres
                        especiales y algunas palabras se codifican directamente con una celda, pero las mayúsculas (⠨) y
                        números (⠼) son representados combinando las letras con otro símbolo previo.</p>
                </div>
                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Día del Braille</h3>
                    <p class="text-gray-600 dark:text-gray-400">El 4 de enero se celebra a nivel mundial el día del
                        sistema de lectura y escritura braille.
                        La celebración de este tiene por objetivo hacer conciencia sobre la integración de las personas
                        que tienen
                        discapacidad visual y que se desenvuelvan en igualdad de condiciones sin ningún tipo de
                        discriminación.</p>
                </div>
                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 96a64 64 0 1 1 128 0A64 64 0 1 1 0 96zM224 272a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM80 416a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zM0 416a64 64 0 1 1 128 0A64 64 0 1 1 0 416zm240 0a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM64 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM224 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM352 96a64 64 0 1 1 128 0A64 64 0 1 1 352 96zm240 0a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0A64 64 0 1 1 512 96zm64 176a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm16 224a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM416 272a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm0-80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm16 224a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-80 0a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Alfabeto Braille</h3>
                    <p class="text-gray-600 dark:text-gray-400">"⠁","⠃","⠉","⠙","⠑","⠋","⠛","⠓","⠊","⠚",
                        "⠅","⠇","⠍","⠝","⠕","⠏","⠟","⠗","⠎","⠞",
                        "⠥","⠧","⠺","⠭","⠽","⠵","⠨⠁"</p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">Caracteres especiales:</p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">
                        "⠷","⠮","⠌","⠬","⠾","⠳","⠻"
                        "⠄", "⠂", "⠆", "⠒", "⠤",
                        "⠢", "⠖", "⠦", "⠣", "⠜", "⠔",
                        "⠸⠜", "⠸⠴", "⠶", "⠖", "⠼⠐",
                        "⠸", "⠄", "⠠⠂", "⠐⠄", "⠐⠸", "⠸⠂",
                        "⠷", "⠾", "⠐", "⠠⠯", "⠢", "⠖"
                    </p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">Números:</p>
                    <br>
                    <p class="text-gray-600 dark:text-gray-400">
                        ⠼⠁, ⠼⠃, ⠼⠉, ⠼⠙, ⠼⠑, ⠼⠋, ⠼⠛, ⠼⠓, ⠼⠊, ⠼⠚
                    </p>
                </div>
                <div class="bg-slate-300 rounded-lg p-3 dark:bg-gray-800">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M297.2 248.9C311.6 228.3 320 203.2 320 176c0-70.7-57.3-128-128-128S64 105.3 64 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7l0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5H109c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C27.6 247.9 16 213.3 16 176C16 78.8 94.8 0 192 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5H226.4c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8l0 0 0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM192 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80V416H272v16c0 44.2-35.8 80-80 80z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">¿Qué es el braille?</h3>
                    <p class="text-gray-600 dark:text-gray-400">El braille es un alfabeto, con el que pueden
                        representarse las letras, los signos de puntuación, los números, la grafía científica, los
                        símbolos matemáticos, la música.
                        Este consiste en seis puntos en relieve organizados como una matriz de tres filas por dos
                        columnas, que convencionalmente se numeran de arriba a abajo y de izquierda a derecha.
                        Mediante estos seis puntos se obtienen 64 combinaciones diferentes. La forma de leer el alfabeto
                        Braille es mover la mano de izquierda a derecha pasando por cada línea. En promedio los lectores
                        de Braille pueden leer de 104 a 125 palabras por minuto.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center text-center">
            <a href="#section2">
                <div
                    class="animate-bounce bg-white dark:bg-slate-800 p-2 w-10 h-10 ring-1 ring-slate-900/5 dark:ring-slate-200/20 shadow-lg rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-sky-700" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <section class="bg-slate-200 dark:bg-gray-900" id="section2">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">¿Qué es Ayúdame a ver?
                </h2>
                <p class="mb-4 font-semibold">Somos una página en la cual te ayudará a poder traducir de forma más
                    sencilla tus
                    documentos que necesites en braille y así crear un ambiente más incluyente en tu establecimiento.
                </p>
                <p class="mb-4 font-semibold">Te ayudaremos a que sea más fácil e intuitivo para ti crear estos
                    documentos. Además,
                    tendrás las opciones de poder manipular los documentos aquí mismo.
                </p>
                <p class="font-semibold">Solo crea tu cuenta y empezamos a trabajar con tus documentos lo antes
                    posible.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('assets/img/braille.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('assets/img/menu_braille.jfif') }}"
                    alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-slate-400 dark:bg-gray-800" id="section3">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-700 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Contacto</h2>
                <p class="mb-4 font-light te">Sugerencias o dudas, envía un correo a <a
                        class="font-bold text-blue-600"
                        href="mailto:ayudameaver28@gmail.com">ayudameaver28@gmail.com</a>.</p>


            </div>
        </div>
    </section>



    <footer class="p-4 bg-slate-400 dark:bg-gray-900 " id="section4">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <img src="{{ asset('assets/img/AYUDAME2.png') }}" class="rounded-2xl mr-3 h-8"
                            alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ayúdame a
                            ver</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">

                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Repositorio</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/Cachorro14/ayudame-a-ver"
                                    class="hover:underline ">Github</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Políticas de Privacidad</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Términos &amp; Condiciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                        class="hover:underline">Ayúdame A Ver</a>. Derechos Reservados.
                </span>

            </div>
        </div>
    </footer>

    @section('scripts')
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        <script>
            function scrollToSection(sectionId) {
                const section = document.getElementById(sectionId);
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
    @endsection
</x-guest-layout>
