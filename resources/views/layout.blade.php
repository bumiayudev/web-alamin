<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('images/logo-alamin.svg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery.orgchart.css') }}">
    <script src="{{ asset('js/jquery.orgchart.js') }}"></script>
  </head>
  <body>
    <div class="min-h-full">
        <header class="bg-white dark:bg-gray-900">
            <nav x-data="{ isOpen: false }" class="relative bg-white dark:bg-gray-900">
                <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                    <div class="flex items-center justify-between">
                        <a href="/">
                            <img class="w-auto h-16 sm:h-24" src="{{ asset('images/logo-alamin.svg') }}" alt="logo-alamin">
                        </a>

                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>

                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-900 md:bg-transparent md:dark:bg-transparent md:mt-0 md:p-0 md:top-0 md:relative md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                        <div class="flex flex-col md:flex-row md:mx-6">
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/">Beranda</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/structures">Struktur Organisasi</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/activities">Kegiatan</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/budget">Laporan Kas</a>
                        </div>

                    </div>
                </div>
            </nav>
            <hr class="h-px my-8 bg-neutral-quaternary border-0">
        </header>
        @yield('content')
        <footer class="bg-white dark:bg-gray-900">
            <div class="container p-6 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="px-6">
                            <a href="/">
                                <img class="w-auto h-16 sm:h-24" src="{{ asset('images/logo-alamin.svg') }}" alt="logo-alamin">
                            </a>

                            <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out on new tips, tutorials, and more.</p>

                            <div class="flex mt-6 -mx-2">
                                <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Youtube">
                                    <!-- License: Apache. Made by Carbon Design: https://github.com/carbon-design-system/carbon -->
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title>logo--youtube</title><path d="M29.41,9.26a3.5,3.5,0,0,0-2.47-2.47C24.76,6.2,16,6.2,16,6.2s-8.76,0-10.94.59A3.5,3.5,0,0,0,2.59,9.26,36.13,36.13,0,0,0,2,16a36.13,36.13,0,0,0,.59,6.74,3.5,3.5,0,0,0,2.47,2.47C7.24,25.8,16,25.8,16,25.8s8.76,0,10.94-.59a3.5,3.5,0,0,0,2.47-2.47A36.13,36.13,0,0,0,30,16,36.13,36.13,0,0,0,29.41,9.26ZM13.2,20.2V11.8L20.47,16Z"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>
                                </a>
                                <a href="#"
                                    class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                    aria-label="Facebook">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Menu</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Struktur DKM</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Kegiatan</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Laporan Kas</a>
                            </div>
                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Kontak</h3>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Whatsapp : 081322445566</span>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Email : admin@alamin.id</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                <div>
                    <p class="text-center text-gray-500 dark:text-gray-400">© <span id="published"></span> - All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
    <script>
        let published = document.getElementById('published');
        let d = new Date();
        let currentYear = d.getFullYear();
        console.log(currentYear);
        published.innerText = currentYear;
    </script>
  </body>
</html>
