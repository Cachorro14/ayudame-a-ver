<x-guest-layout>
    <div class="container mx-auto">
        <div class="box p-10 sm:m-auto">
                <x-jet-authentication-card>
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>

                    <livewire:register>
                        <div class="flex mt-4">
                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                href="/">↼ Inicio</a>
                        </div>
                </x-jet-authentication-card>
        </div>
    </div>
</x-guest-layout>
