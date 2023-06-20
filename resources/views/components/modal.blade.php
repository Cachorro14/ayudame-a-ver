<div x-data="{ open: false }">
    <button @click="open = true" class="{{ $triggerClass }}">{{ $triggerText }}</button>

    <div x-show="open" @click.away="open = false" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <span class="absolute top-0 right-0 p-2 cursor-pointer" @click="open = false">
                        <svg class="h-6 w-6 text-gray-500 hover:text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                            <h3 class="text-lg leading-6 font-semibold text-gray-900 mb-3">{{ $title }}</h3>
                            {{ $slot }}
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <a target="_blank" href="archivo-show/ . {{ $buttonRoute }}" class="{{ $buttonClass }}">{{ $buttonText }}</a>
                </div>
            </div>
        </div>
    </div>
</div>