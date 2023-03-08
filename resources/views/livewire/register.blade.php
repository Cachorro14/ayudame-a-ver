<div>
    <div class="w-full">
        <form wire:submit.prevent="saveUser" class="form-control p-3">
            @csrf
            <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Crear usuario
            </h1>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Juanito Peréz Prado"
                    type="text"
                    wire:model="name"
                />
                @error('name')
                <span class="text-danger error text-red-500">{{
                    $message
                }}</span
                >@enderror
            </label>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400"
                    >Correo Electrónico</span
                >
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="ejemplo@ejemplo.com"
                    type="email"
                    wire:model="email"
                />
                @error('email')
                <span class="text-danger error text-red-500">{{
                    $message
                }}</span
                >@enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="password"
                    wire:model="password"
                />
                @error('password')
                <span class="text-danger error text-red-500">{{
                    $message
                }}</span
                >@enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400"
                    >Confirmar Contraseña</span
                >
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="password"
                    wire:model="confirmPass"
                />
                @error('confirmPass')
                <span class="text-danger error text-red-500">{{
                    $message
                }}</span
                >@enderror
            </label>
            <!-- You should use a button here, as the anchor is only used for the example  -->
            <button
                type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-teal-200 border border-transparent rounded-lg active:bg-teal-600 hover:bg-teal-700 focus:outline-none focus:shadow-outline-purple"
            >
                Registrarse
            </button>
            <hr class="my-8" />
        </form>
    </div>
    <div class="col-md-12">
        @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong",
                html: '<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;" wire:click="direct">OK</button>',
            });
        </script>
        @endif
    </div>
</div>
