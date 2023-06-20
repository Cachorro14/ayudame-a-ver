<div>
    <div class="w-full max-w-md">
        <form wire:submit.prevent="saveUser" class="form-control p-3">
            @csrf
            <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-700"
            >
                Crear usuario
            </h1>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-800">Nombre</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-slate-100 dark:bg-slate-50 focus:border-grey-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
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
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-800"
                >Correo Electrónico</span
                >
                <input
                class="block w-full mt-1 text-sm dark:border-slate-100 dark:bg-slate-50 focus:border-grey-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
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
                <span class="text-gray-700 dark:text-gray-800">Contraseña</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-slate-100 dark:bg-slate-50 focus:border-grey-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
                    type="password"
                    placeholder="***********"
                    wire:model="password"
                />
                @error('password')
                <span class="text-danger error text-red-500">{{
                    $message
                }}</span
                >@enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-800"
                    >Confirmar Contraseña</span
                >
                <input
                    class="block w-full mt-1 text-sm dark:border-slate-100 dark:bg-slate-50 focus:border-grey-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg"
                    type="password"
                    placeholder="***********"
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
                class="block w-full items-center mt-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                
            >
                Registrarse
            </button>
            <hr class="my-3" />
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
