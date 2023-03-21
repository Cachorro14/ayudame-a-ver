<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo documento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="p-3">Nombre</th>
                                <th class="p-3">Restaurante</th>
                                <th class="p-3">Documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="p-3">{{ $user->name}}</td>
                                <td class="p-3">{{ $user->restaurant->nombre_lugar}}</td>
                                @foreach ($user->restaurant->documents as $documento)
                                <td class="p-3">{{ $documento->documento}}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
