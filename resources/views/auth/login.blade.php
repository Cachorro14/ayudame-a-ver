<x-guest-layout>
    <div class="container mx-auto">
        <div class="box p-10 sm:m-auto">
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
                    </div>
                    <div class="grid grid-cols-2 gap-5 mt-4 ">
                        <a class="text-center bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="vertical-align: middle; display: inline-block;">
                                <path d="M493.6 445c-11.2 5.3-24.5 3.6-34.1-4.4L288 297.7V416c0 12.4-7.2 23.7-18.4 29s-24.5 3.6-34.1-4.4L64 297.7V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96C0 78.3 14.3 64 32 64s32 14.3 32 32V214.3L235.5 71.4c9.5-7.9 22.8-9.7 34.1-4.4S288 83.6 288 96V214.3L459.5 71.4c9.5-7.9 22.8-9.7 34.1-4.4S512 83.6 512 96V416c0 12.4-7.2 23.7-18.4 29z"/>
                            </svg>
                            <span>Inicio</span>
                        </a>
                        <a class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" href="register">Registrarse</a>
                    </div>
                </x-authentication-card>
            </div>
        </div>
    </div>
</x-guest-layout>
