<div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if ($archivos)
            <h1 class="text-xl font-bold">Textos</h1>
            <div class="grid grid-cols-4 gap-6 mt-5 p-4">
                @foreach ($archivos as $archivo)
                    @if ($archivo->extension == '.txt')
                        @if ($archivo->tipo != 'braille')
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <pre>{{ $textos[$loop->index] }}</pre>
                                <div class="px-6 py-4">
                                    <p class="text-gray-700 text-base">{{ $archivo->nombre }}</p>
                                    <div class="flex items-center justify-center">
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
                                        <a class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded m-2"
                                            target="_blank"
                                            href="{{ route('archivo-show', [base64_encode($archivo->hash)]) }}"
                                            title="Visualizar" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                                <path fill-rule="evenodd"
                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
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
                                    <button
                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded m-2"
                                        wire:click="translateBraille({{ $loop->index }})">Traducir Braille</button>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</div>
