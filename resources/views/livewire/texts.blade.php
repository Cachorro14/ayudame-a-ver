<div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if ($archivos)
            <h1 class="text-xl font-bold">Textos</h1>
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-6 mt-5 p-4 w-full">
                @foreach ($archivos as $archivo)
                    @if ($archivo->extension == '.txt')
                        @if ($archivo->tipo != 'braille')
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="{{ asset('assets/img/imagen-para-txt.png') }}" alt="Placeholder Image">
                                <div class="px-6 py-4">
                                    <p class="text-gray-700 text-base font-bold mb-3">{{ $archivo->nombre }}</p>
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="justify-center items-center text-center">
                                            <x-modal trigger-text="Editar texto"
                                                trigger-class="mt-3 inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                title="{{ $archivo->nombre }}" button-text="Mostrar"
                                                button-class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-slate-500 text-base font-medium text-white hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                button-route="{{ base64_encode($archivo->hash) }}">
                                                <form action="/formulario" method="POST">
                                                    @csrf
                                                    <textarea cols="50" rows="15" name="texto">{{ $textos[$loop->index] }}</textarea>
                                                    <button
                                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                        type="submit">Enviar</button>
                                                    <input type="hidden" name="archivo" value="{{ $archivo->id }}">
                                                </form>
                                            </x-modal>
                                            <button
                                                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded m-2"
                                                wire:click="translateBraille({{ $loop->index }})">Traducir
                                                Braille</button>
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <button
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded m-2"
                                                wire:click="borrarArchivo({{ $archivo }})" title="Eliminar"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded m-2"
                                                href="{{ route('archivo-download', [base64_encode($archivo->hash)]) }}"
                                                title="Descargar" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M2 4.75C2 3.784 2.784 3 3.75 3h4.836c.464 0 .909.184 1.237.513l1.414 1.414a.25.25 0 00.177.073h4.836c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0116.25 17H3.75A1.75 1.75 0 012 15.25V4.75zm8.75 4a.75.75 0 00-1.5 0v2.546l-.943-1.048a.75.75 0 10-1.114 1.004l2.25 2.5a.75.75 0 001.114 0l2.25-2.5a.75.75 0 10-1.114-1.004l-.943 1.048V8.75z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endif
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Se editó el archivo con éxito!',
                text: 'Se editó el archivo correctamente',
            });
        </script>
    @endif
</div>
