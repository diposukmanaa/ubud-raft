@php use Carbon\Carbon; @endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubud Rafting | Gallery</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4/dist/fancybox.css">

        <!-- <link rel="stylesheet" href="css/welcome-gallery.css"> -->
        <style>

        </style>
    </head>
    <body>
        <div class="relative h-screen">
            <video
                autoplay="autoplay"
                muted="muted"
                loop="loop"
                class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('images/about-us.mp4')}}" type="video/mp4" >
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
                            <a
                                href="/"
                                title=""
                                class="text-base text-white transition-all duration-200 hover:text-opacity-80
                                {{ Request::is('/') ? 'font-bold' : 'font-normal' }}">
                                Home
                            </a>

                            <a
                                href="{{ route('about')}}"
                                title=""
                                class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('about') ? 'font-bold' : 'font-normal' }}">
                                About
                            </a>

                            <a
                                href="{{ route('service') }}"
                                title=""
                                class="text-base text-white transition-all duration-200 hover:text-opacity-80
                                {{ Request::is('service') ? 'font-bold' : 'font-normal' }}">
                                Services
                            </a>

                            <a
                                href="{{route('gallery')}}"
                                title=""
                                class="text-base text-white transition-all duration-200 hover:text-opacity-80 {{ Request::is('gallery') ? 'font-bold' : 'font-normal' }}">
                                Gallery
                            </a>
                            <a
                                href="{{ route('blog') }}"
                                title=""
                                class="text-base text-white transition-all duration-200 hover:text-opacity-80">
                                Blog
                            </a>
                            <a
                                href="{{route('contact')}}"
                                title=""
                                class="hidden text-base text-white transition-all duration-200 lg:inline-flex hover:text-opacity-80
                                {{ Request::is('contact') ? 'font-bold' : 'font-normal' }}">
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

            <section class="relative lg:min-h-[1000px] pb-14 sm:pb-20 lg:pb-28">
                <div
                    class="px-4 min-[300px]:top-96 min-[768px]:top-88  min-[820px]:top-68 min-[1024px]:top-60 min-[913px]:top-96 mx-auto max-w-7xl sm:px-6 lg:px-8 relative z-20">
                    <div
                        class="max-w-2xl mx-auto text-center"
                        data-aos="fade-up"
                        data-aos-duration="800">
                        <p class="text-sm text-gray-50 sm:text-lg">Our Story</p>
                        <h2
                            class="text-3xl text-white font-bold xl:text-5xl lg:text-4xl sm:text-3xl m:text-2xl "
                            style="line-height: 120%">Where Every Current Tells a Story of Adventure</h2>
                        <p class="text-sm text-gray-50 sm:text-lg mt-3">The Longer Journey, better story with Ubud Rafting</p>

                    </div>
                </div>
            </section>
        </div>


        <section id="about" class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div
                    class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                    <div
                        class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div
                                class="flex-col justify-start lg:items-start items-center gap-4 flex"
                                data-aos="fade-up"
                                data-aos-delay="300"
                                data-aos-duration="800">
                                <h6 class="text-gray-400 text-base font-normal leading-relaxed">About Us</h6>
                                <div
                                    class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                    <h2
                                        class="text-green-700 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                        Crafting Unforgettable Adventures</h2>
                                    <p
                                        class="text-gray-700 text-base font-normal leading-relaxed lg:text-start text-center"
                                        style="text-align: justify">Welcome
                                        to Ubud Rafting, where every adventure tells a remarkable story in the heart of
                                        Bali. Our journey began with a deep passion for nature and exploration, leading
                                        us to
                                        <span class="font-bold">create unforgettable experiences
                                        </span>
                                        for adventurers and nature lovers alike. As you navigate the exhilarating rapids
                                        of our rivers, we invite you to immerse yourself in the lush landscapes that
                                        surround you. Each moment spent with us is a chance to discover the beauty of
                                        Bali, where every twist and turn brings new thrills and unforgettable memories.</p>
                                    <p
                                        class="text-gray-700 text-base font-normal leading-relaxed lg:text-start text-center"
                                        style="text-align: justify">But
                                        our adventures don’t stop at rafting. We offer a diverse range of exhilarating
                                        activities, including ATV rides through rugged terrains, Bike Adventures along
                                        scenic trails, and relaxing tubing experiences on tranquil rivers. Our dedicated
                                        team of
                                        <span class="font-bold">experienced guides is committed to ensuring your safety and enjoyment,</span>
                                        allowing you to focus on creating lasting memories. Join us at Ubud Rafting,
                                        where we believe every adventure should be as inspiring as the landscapes that
                                        cradle them.</p>

                                </div>
                            </div>
                            <div
                                class="w-full flex-col justify-center items-start gap-6 flex"
                                data-aos="fade-up"
                                data-aos-delay="500"
                                data-aos-duration="800">
                                <div
                                    class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                    <div
                                        class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">10+ Years</h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Experience in professional recreation service</p>
                                    </div>
                                    <div
                                        class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                        <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">99% Happy Client
                                        </h4>
                                        <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence Achieved Through Success</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full lg:justify-start justify-center items-start flex"
                        data-aos="fade-up"
                        data-aos-delay="700"
                        data-aos-duration="800">
                        <div
                            class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                            <img
                                class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                                src="images/DSC_6057.jpg"
                                alt="about Us image"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div
                    class="mb-10 lg:mb-16 flex justify-center items-center flex-col gap-x-0 gap-y-6 lg:gap-y-0 lg:flex-row lg:justify-between max-md:max-w-lg max-md:mx-auto" data-aos="fade-up"
                    data-aos-duration="800">
                    <div class="relative w-full text-center lg:text-left lg:w-2/4">
                        <h2
                            class="text-4xl font-bold text-gray-900 leading-[3.25rem] lg:mb-6 mx-auto max-w-max lg:max-w-md lg:mx-0">Enjoy the finest features with our services</h2>
                    </div>
                    <div class="relative w-full text-center  lg:text-left lg:w-2/4">
                        <p class="text-lg font-normal text-gray-500 mb-5">Are you ready to embark on an
                            adventure of a lifetime? Book your journey with Ubud Rafting today and let us
                            take you on an incredible exploration of Bali’s rivers and landscapes!</p>
                        <a
                            href="{{route('contact')}}"
                            class="flex flex-row items-center justify-center gap-2 text-base font-semibold text-green-600 lg:justify-start hover:text-green-700 ">Booking Now
                            <svg
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                                    stroke="#16a34a"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="flex justify-center items-center  gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8" data-aos="fade-up"
                    data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-green-600">
                        <div
                            class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                            <svg
                                width="30"
                                height="30"
                                viewBox="0 0 30 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.7222 11.6667V7.22225C24.7222 5.99495 23.7273 5 22.5 5H4.72222C3.49492 5 2.5 5.99492 2.5 7.22222V22.7778C2.5 24.0051 3.49492 25 4.72222 25H22.5C23.7273 25 24.7222 24.005 24.7222 22.7777V17.7778M20.8333 17.7778H25.2778C26.5051 17.7778 27.5 16.7829 27.5 15.5556V13.8889C27.5 12.6616 26.5051 11.6667 25.2778 11.6667H20.8333C19.606 11.6667 18.6111 12.6616 18.6111 13.8889V15.5556C18.6111 16.7829 19.606 17.7778 20.8333 17.7778Z"
                                    stroke="#16a34a"
                                    stroke-width="2"></path>
                            </svg>

                        </div>
                        <h4
                            class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">Journey Experiences</h4>
                        <p
                            class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                            we create unforgettable journey is designed to connect you with nature of Bali.
                        </p>
                    </div>
                    <div
                        class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-green-600">
                        <div
                            class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                            <svg
                                width="30"
                                height="30"
                                viewBox="0 0 30 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.375 15.8571C16.1009 15.8571 17.5 14.458 17.5 12.7321C17.5 11.0062 16.1009 9.6071 14.375 9.6071C12.6491 9.6071 11.25 11.0062 11.25 12.7321C11.25 14.458 12.6491 15.8571 14.375 15.8571ZM14.375 15.8571V20.8571M3.75 13.2264V15.2343C3.75 17.6868 3.75 18.9131 4.27747 19.9685C4.80493 21.0239 5.78567 21.76 7.74715 23.2322L8.57248 23.8516C11.4626 26.0208 12.9077 27.1054 14.5753 27.1054C16.243 27.1054 17.688 26.0208 20.5782 23.8516L21.4035 23.2322C23.365 21.76 24.3457 21.0239 24.8732 19.9685C25.4006 18.9131 25.4006 17.6868 25.4006 15.2343V13.2264C25.4006 9.95932 25.4006 8.32576 24.546 7.05852C23.6913 5.79128 22.1768 5.17918 19.1477 3.95499L18.3223 3.62144C16.4724 2.87381 15.5475 2.5 14.5753 2.5C13.6032 2.5 12.6782 2.87381 10.8283 3.62144L10.003 3.95499C6.97389 5.17919 5.45934 5.79128 4.60467 7.05852C3.75 8.32576 3.75 9.95932 3.75 13.2264Z"
                                    stroke="#16a34a"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>

                        </div>
                        <h4
                            class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">Adventure for Everyone</h4>
                        <p
                            class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                            We nsures that everyone can enjoy the wonders of Ubud
                        </p>
                    </div>
                    <div
                        class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-green-600">
                        <div
                            class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                            <svg
                                width="30"
                                height="30"
                                viewBox="0 0 30 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0067 10V15.6652C15.0067 16.0358 15.1712 16.3873 15.4556 16.6248L18.75 19.375M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
                                    stroke="#16a34a"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>

                        </div>
                        <h4
                            class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">Expert Guide
                        </h4>
                        <p
                            class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                            We commitment to safety, you can relax and enjoy your adventure
                        </p>
                    </div>
                    <div
                        class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-green-600">
                        <div
                            class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                            <svg
                                width="30"
                                height="30"
                                viewBox="0 0 30 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
                                    stroke="#16a34a"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>

                        </div>
                        <h4
                            class="text-xl font-semibold text-gray-900 mb-3 capitalize transition-all duration-500 group-hover:text-white">Sustainable Tourism</h4>
                        <p
                            class="text-sm font-normal text-gray-500 transition-all duration-500 leading-5 group-hover:text-white">
                            We are committed to preserving Bali's natural beauty
                        </p>
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
                </div>

                <hr class="mt-16 mb-10 border-gray-200" />

                <p class="text-sm text-center text-gray-600">© Copyright 2024, All Rights Reserved by Scena Project</p>
            </div>
        </section>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4/dist/fancybox.umd.js"></script>
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
</html>