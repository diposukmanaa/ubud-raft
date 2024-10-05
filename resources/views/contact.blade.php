@php use Carbon\Carbon; @endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubud Rafting | Contact</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- <link rel="stylesheet" href="css/welcome-gallery.css"> -->
        <style>
            .swiper-button-prev:after,
            .swiper-rtl .swiper-button-next:after {
                content: '' !important;
            }

            .swiper-button-next:after,
            .swiper-rtl .swiper-button-prev:after {
                content: '' !important;
            }

            .swiper-button-next svg,
            .swiper-button-prev svg {
                width: 24px !important;
                height: 24px !important;
            }

            .swiper-button-next,
            .swiper-button-prev {
                position: relative !important;
            }

            .swiper-slide.swiper-slide-active {
                --tw-border-opacity: 1 !important;
                border-color: rgb(79 70 229 / var(--tw-border-opacity)) !important;
            }

            .swiper-slide.swiper-slide-active > .swiper-slide-active\:text-indigo-600 {
                --tw-text-opacity: 1;
                color: rgb(79 70 229 / var(--tw-text-opacity));
            }

            .swiper-slide.swiper-slide-active > .flex .grid .swiper-slide-active\:text-indigo-600 {
                --tw-text-opacity: 1;
                color: rgb(79 70 229 / var(--tw-text-opacity));
            }
            .mapouter {
            position: relative;
            text-align: right;
            width: 100%; /* Mengatur lebar kontainer menjadi 100% */
            padding-bottom: 56.25%; /* Rasio aspek 16:9 (tinggi 56.25% dari lebar) */
            height: 0; /* Tinggi awal diatur menjadi 0 */
            }
            
            .gmap_canvas {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%; /* Mengatur lebar dan tinggi ke 100% dari kontainer */
            }

            iframe {
                width: 100%;
                height: 100%; /* Mengatur tinggi iframe menjadi 100% */
            }
        </style>
    </head>
    <body>
        <div class="relative h-screen">
            <video
                autoplay="autoplay"
                muted="muted"
                loop="loop"
                class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('images/contact.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="relative z-10">
                <!-- Your content here -->
            </div>
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <header class="absolute inset-x-0 top-0 z-10 w-full">
                <div class="px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 lg:h-20">
                        <div class="flex-shrink-0">
                            <a href="#" title="" class="flex font-medium pr-10 text-white text-2xl">
                                Ubud Rafting
                            </a>
                        </div>
            
                        <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10">
                            <a href="/" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('/') ? 'font-bold' : 'font-normal' }}">
                                Home
                            </a>
                            <a href="{{route('about')}}" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('about') ? 'font-bold' : 'font-normal' }} ">About</a>
                            <a href="{{ route('service') }}" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('service') ? 'font-bold' : 'font-normal' }}">
                                Services
                            </a>
                            <a href="{{route('gallery')}}" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('gallery') ? 'font-bold' : 'font-normal' }} ">Gallery</a>
                            <a href="{{ route('blog') }}" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('blog') ? 'font-bold' : 'font-normal' }} ">Blog</a>
                            <a href="{{ route('contact') }}" title="" class="hidden text-base text-white transition-all duration-200 lg:inline-flex hover:text-opacity-80 {{ Request::is('contact') ? 'font-bold' : 'font-normal'}}">
                                Contact
                            </a>
                        </div>
            
                        <button type="button" id="menu-toggle" class="inline-flex p-2 ml-1 text-white focus:text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 ">
                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            
                <!-- Menu Mobile -->
                <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>
    
                <div id="mobile-menu" class="lg:hidden bg-white h-screen w-1/2 fixed top-0 right-0 transition-transform transform translate-x-full duration-300 ease-in-out pt-10 z-50">
                    <div id="close" class="item-start w-4 h-6 p-3 absolute top-0 left-0 mb-16">
                        <i class="fa-solid fa-xmark"></i>
                        </div>
                    <div class="flex flex-col px-4 pt-2 pb-3 space-y-4 mt-10">
    
                        <a href="/" class="text-base text-black transition-all duration-200 hover:text-opacity-80">Home</a>
                        <a href="{{ route('about')}}" class="text-base text-black transition-all duration-200 hover:text-opacity-80">About</a>
                        <a href="{{ route('service') }}" class="text-base text-black transition-all duration-200 hover:text-opacity-80">Services</a>
                        <a href="{{ route ('gallery')}}" class="text-base text-black transition-all duration-200 hover:text-opacity-80">Gallery</a>
                        <a href="{{ route('blog') }}" class="text-base text-black transition-all duration-200 hover:text-opacity-80">Blog</a>
                        <a href="{{ route('contact') }}" class="text-base text-black transition-all duration-200 hover:text-opacity-80">Contact</a>
                    </div>
                </div>
            </header>

            <section class="relative lg:min-h-[1000px] pb-14 sm:pb-20 lg:pb-28">
                <div
                    class="px-4 min-[300px]:top-96 min-[768px]:top-88  min-[820px]:top-68 min-[1024px]:top-60 min-[913px]:top-96 mx-auto max-w-7xl sm:px-6 lg:px-8 relative ">
                    <div
                        class="max-w-2xl mx-auto text-center"
                        data-aos="fade-up"
                        data-aos-duration="800">

                        <h2
                            class="text-3xl text-white font-medium xl:text-5xl lg:text-4xl sm:text-3xl m:text-2xl "
                            style="line-height: 120%">Let’s Create an Unforgettable Journey with Ubud Rafting</h2>
                        <p class="text-sm text-gray-50 sm:text-lg mt-3">The Longer Journey, better story with Ubud Rafting</p>

                        <a
                            href="#_"
                            class=" mt-10 relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-green-600 transition duration-300 ease-out border-2 border-green-500 rounded-full shadow-md group">
                            <span
                                class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-green-500 group-hover:translate-x-0 ease">
                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                            <span
                                class="absolute flex items-center justify-center w-full h-full text-green-500 transition-all duration-300 transform group-hover:translate-x-full ease">Booking Now!</span>
                            <span class="relative invisible">Booking Now!</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-xl mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Get in Touch with Ubud Rafting</p>

                    <h2
                        class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Contact us for any inquiries or bookings!</h2>
                </div>

                <div
                    class="grid items-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 gap-x-4" >
                    <div class="space-y-8 lg:pr-16 xl:pr-24 lg:col-span-2 lg:space-y-12" data-aos="fade-up" data-aos-duration="800">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#3d3d3d" d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z"/></svg>
                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">WhatsApp</h3>
                                <p class="mt-3 text-base text-gray-600">+62 1223 1132 1231</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="flex-shrink-0 text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#3d3d3d" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">Email</h3>
                                <p class="mt-3 text-base text-gray-600">ubudraftingid@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="flex-shrink-0 text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#3D3D3D" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">Google Maps</h3>
                                <p class="mt-3 text-base text-gray-600">Jl. Raya Kedewatan No.37, Kedewatan,
                                    Kecamatan Ubud, Kabupaten Gianyar, Bali 80571</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 rounded" data-aos="fade-up" data-aos-duration="800">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe
                                    id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Ubud+Rafting+Jl.+Raya+Kedewatan+No.37%2C+Kedewatan%2C+Kecamatan+Ubud%2C+Kabupaten+Gianyar%2C+Bali+80571&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0"
                                    scrolling="no"
                                    marginheight="0"
                                    marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- footer --}}

        <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-6 gap-y-16 gap-x-12">
                    <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
                        <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg" alt="" />

                        <p class="text-base leading-relaxed text-gray-600 mt-7">The Longer Journey, better story with Ubud Rafting.</p>

                        <ul class="flex items-center space-x-3 mt-9">
                            <li>
                                <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                                        ></path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                                        ></path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Company</p>

                        <ul class="mt-6 space-y-4">
                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> About </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Features </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Works </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Career </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Help</p>

                        <ul class="mt-6 space-y-4">
                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Customer Support </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Delivery Details </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Privacy Policy </a>
                            </li>
                        </ul>
                    </div>

                    <!-- <div class="col-span-2 md:col-span-1 lg:col-span-2 lg:pl-8">
                        <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Subscribe to newsletter</p>

                        <form action="#" method="POST" class="mt-6">
                            <div>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                            </div>

                            <button type="submit" class="inline-flex items-center justify-center px-6 py-4 mt-3 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700">Subscribe</button>
                        </form>
                    </div> -->
                </div>

                <hr class="mt-16 mb-10 border-gray-200" />

                <p class="text-sm text-center text-gray-600">© Copyright 2024, All Rights Reserved by Scena Project</p>
            </div>
        </section>


        <script src="js/welcome-gallery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenu = document.getElementById('close');
            const overlay = document.getElementById('overlay');

            // Open menu
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('translate-x-full'); // Toggle mobile menu visibility
                overlay.classList.toggle('hidden'); // Show overlay
            });

            closeMenu.addEventListener('click', function(){
                mobileMenu.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            })



            // Close menu when clicking outside (on the overlay)
            overlay.addEventListener('click', function() {
                mobileMenu.classList.add('translate-x-full'); // Hide mobile menu
                overlay.classList.add('hidden'); // Hide overlay
            });

        </script>

    </body>
</html>