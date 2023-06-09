<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentos en texto') }}
        </h2>
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('texts', ['archivos' => $archivos])
            </div>
        </div>
    </x-slot>
</x-app-layout>
