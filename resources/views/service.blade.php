<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubud Rafting - Services</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header class="absolute inset-x-0 top-0 z-10 w-full">
            <div class="px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-20">
                    <div class="flex-shrink-0">
                        <a href="#" title="" class="flex font-medium pr-10 text-black text-2xl">
                            Ubud Rafting
                        </a>
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10">
                        <a
                            href="/"
                            title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80
                                {{ Request::is('/') ? 'font-bold' : 'font-normal' }}">
                            Home
                        </a>

                        <a
                            href="#"
                            title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">
                            About
                        </a>

                        <a
                            href="{{ route('service') }}"
                            title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80
                                {{ Request::is('service') ? 'font-bold' : 'font-normal' }}">
                            Services
                        </a>

                        <a
                            href="#"
                            title=""
                            class="text-base text-black transition-all duration-200 hover:text-opacity-80">
                            Gallery
                        </a>
                        <a
                            href="#"
                            title=""
                            class="hidden text-base text-black transition-all duration-200 lg:inline-flex hover:text-opacity-80">
                            Blog
                        </a>
                        <a
                            href="#"
                            title=""
                            class="hidden text-base text-black transition-all duration-200 lg:inline-flex hover:text-opacity-80">
                            Contact
                        </a>
                    </div>

                    <button
                        type="button"
                        class="inline-flex p-2 ml-1 text-white transition-all duration-200 rounded-md sm:ml-4 lg:hidden focus:bg-gray-800 hover:bg-gray-800">
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg
                            class="block w-6 h-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>

                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg
                            class="hidden w-6 h-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <section class="pt-10 overflow-hidden bg-white sm:pt-24 lg:pt-32">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Every
                        river in Ubud has a story to tell, and we invite you to immerse yourself in it</h2>
                    <p class="mt-4 text-base leading-relaxed text-gray-600">Explore our diverse
                        range of rafting services and craft your unique adventure narrative today!</p>
                </div>

                <div
                    class="flex flex-col items-start justify-center max-w-lg px-10 mx-auto mt-8 space-y-8 lg:max-w-xl sm:px-0 sm:space-y-0 sm:flex-row sm:mt-16 sm:space-x-6 lg:space-x-12 sm:items-center">
                    <div class="flex items-center lg:flex-1">
                        <svg
                            class="flex-shrink-0 text-gray-400 w-14 h-14"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                        </svg>
                        <p class="ml-4 text-lg font-semibold leading-snug text-black">Create powerful websites fast</p>
                    </div>

                    <div class="flex items-center lg:flex-1">
                        <svg
                            class="flex-shrink-0 text-gray-400 w-14 h-14"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1"
                                d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <p class="ml-4 text-lg font-semibold leading-snug text-black">Easy to customize, ready to launch</p>
                    </div>
                </div>

                <!-- <div class="mt-10 sm:mt-16">
                    <img
                        class="w-full max-w-3xl mx-auto -mb-16 rounded-lg shadow-xl"
                        src="images/DSC_6057.jpg"
                        alt=""/>
                </div> -->
            </div>
        </section>

    </body>
</html>