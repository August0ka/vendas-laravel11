<header>
    <nav class="py-2.5">
        <div class="grid grid-cols-12 text-gray-200">
            <a href="/" class="col-span-12 mb-3 ml-5">
                <div class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9"
                        alt="lojinha_legal_logo" />
                    <span class="self-center text-xl md:text-2xl font-semibold whitespace-nowrap">Lojinha legal</span>
                </div>
            </a>
            <div class="col-span-12 h-10 bg-vivid-violet-950 flex items-center justify-between">
                <div class="ml-5">
                    <button data-collapse-toggle="mobile-menu-2" type="button" id="hamburger_button"
                        class="items-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="">
                    <a href="{{ route('site.login') }}"
                        class="text-gray-100 bg-pumpkin-400 font-medium rounded-full text-xs md:text-lg xl:text-base px-3 py-1">
                        Login
                    </a>

                    <button
                        class="text-gray-100 bg-pumpkin-600 font-medium rounded-full text-xs md:text-lg xl:text-base px-3 py-1">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>