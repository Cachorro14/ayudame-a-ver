<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentos braille') }}
        </h2>
        <div class="py-10">
            <p class="text-lg mb-3 px-3">Aquí pondrás manipular con tus documentos en braille, verlos descargarlos y eliminarlos.</p>
                <span
            style="
                display: block;
                width: 100%;
                border-bottom: 2px solid rgb(231, 234, 236);
            "></span>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('braille', ['archivos' => $archivos])
            </div>
        </div>
    </x-slot>
</x-app-layout>
