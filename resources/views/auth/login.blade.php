<x-guest-layout>
    <div class="container mx-auto">
        <div class="box p-10 sm:m-auto bg-cyan-600 ">
            <div class="flex justify-center">
                <x-authentication-card>
                    <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot>
                    
                    <x-jet-validation-errors class="mb-4" />
                    
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div>
                            <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <strong>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('¿Haz olvidado la contraseña?') }}
                                </a>
                            </strong>
                            @endif
                            <x-jet-button class="ml-4">
                                {{ __('iniciar sesion') }}
                            </x-jet-button>
                        </div>
                    </form>
                    <div class="flex justify-center mt-4">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="register">Registrarse</a>
                    </div>
                </x-authentication-card>
            </div>
        </div>
    </div>
</x-guest-layout>
