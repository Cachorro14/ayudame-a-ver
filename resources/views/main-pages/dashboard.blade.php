<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archivos') }}
        </h2>
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="dropzone">
                        <livewire:files />
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
