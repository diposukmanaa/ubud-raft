

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubud Rafting | Cycling</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");
        </style>
        

    </head>
    <body>
        <div class="relative h-screen">
            <video
                autoplay="autoplay"
                muted="muted"
                loop="loop"
                class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('images/cycling.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="relative z-10">
                {{-- content --}}
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
                    class="px-4 min-[300px]:top-96 min-[768px]:top-88  min-[820px]:top-68 min-[1024px]:top-60 min-[913px]:top-96 mx-auto max-w-7xl sm:px-6 lg:px-8 relative z-20">
                    <div
                        class="max-w-2xl mx-auto text-center"
                        data-aos="fade-up"
                        data-aos-duration="800">

                        <p class="text-sm text-gray-50 sm:text-lg ">Our Activity</p>
                        <h2 class="text-3xl text-white font-bold xl:text-5xl lg:text-4xl sm:text-3xl m:text-2xl "
                            style="line-height: 120%">Cycling Tour Activity</h2>
                        <p class="text-sm text-gray-50 sm:text-lg mt-3">The Longer Journey, better story with Ubud Rafting</p>
                    </div>
                </div>
            </section>
        </div>
        
        {{-- content --}}
        <section class="py-24 bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center flex-col lg:flex-row md:mt-20">
                    <div class="w-full lg:w-1/2">
                        <h2
                            class="font-manrope text-4xl text-gray-900 font-bold leading-[4rem] mb-5 text-center lg:text-left" data-aos="fade-up" data-aos-duration="800">Cycling Tour Activity</h2>
                        <p class="text-m text-gray-500 mb-5 text-center lg:text-justify w-full lg:w-2/3" data-aos="fade-up" data-aos-duration="800">
                            Enjoy the beauty of Bali by cycling; it's not only a fun activity but also a wonderful way to stay healthy. As you pedal through picturesque landscapes, you’ll experience the lush greenery, vibrant rice fields, 
                            and charming villages that make Ubud so special. The fresh air and natural surroundings will 
                            invigorate your spirit and create lasting memories</p>
                        <p class="text-m text-gray-500 mb-5 text-center lg:text-justify w-full lg:w-2/3" data-aos="fade-up" data-aos-duration="800">Guided by an experienced instructor, our route features gentle, mostly downhill roads that are perfect for cyclists of all skill levels. You won't need to exert yourself too much, allowing you to focus on soaking in the stunning scenery and unique culture of the area. Whether you're a seasoned cyclist or a beginner, this tour offers a delightful way to explore Bali's hidden gems.</p>
                        <a class="cursor-pointer py-3 px-8 w-60 bg-green-500 text-white text-base font-semibold transition-all duration-500 block text-center rounded-full hover:bg-green-700 mx-auto lg:mx-0" data-aos="fade-up" data-aos-duration="800">Booking Now</a>
                    </div>
                    <div class="w-full lg:w-1/2 lg:mt-0 md:mt-40 mt-16 max-lg:max-w-2xl">
                        <div class="grid grid-cols-2 min-[450px]:grid-cols-2 md:grid-cols-3 gap-4" >
                            <img src="{{ asset('images/bike-1.jpg')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"/>
                            <img src="{{ asset('images/bike-2.webp')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mx-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"/>
                            <img src="{{ asset('images/bike-3.jpg')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0 md:ml-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" />
                            <img src="{{ asset('images/bike-4.jpeg')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0 md:ml-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" />
                            <img src="{{ asset('images/bike-5.jpg')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover md:-mt-20 mx-auto min-[450px]:mr-0 md:mx-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" />
                            <img src="{{ asset('images/bike-6.jpg')}}" alt="Team tailwind section"
                                class="w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" />
                        </div>
                    </div>
                </div>
            </div>
        </section> 


        <section class="py-10 sm:py-16 lg:py-24 bg-white">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-3xl lg:text-4xl">Package Included</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">We are committed to delivering top-quality support for your cycling experience.</p>
                </div>
        
                <div class="grid grid-cols-1 gap-6 mt-12 lg:mt-16 xl:gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black bg-green-100 rounded-full">
                                    <i class="fa-solid fa-wine-bottle"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Mineral Water</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-map"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Cycling trip in Ubud Area</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-8">
                            <div class="flex items-center">

                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-leaf"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">View of coffee plantations</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-gopuram"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">View of Gunung Raung Temple</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="500">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-gopuram"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">View of Yang Api temple</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="600">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-seedling"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Rice Field</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow" data-aos="fade-up" data-aos-delay="700">
                        <div class="p-8">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-12 h-12 text-black  bg-green-100 rounded-full">
                                    <i class="fa-solid fa-lemon"></i>
                                </div>
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Young Coconut</p>
                                    
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            
                        </div>
                    </div>

                    
        
                </div>
            </div>
        </section>

        <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <div class="mb-12 justify-between flex flex-col md:flex-row">
                <h2 class="mb-8 text-3xl max-w-lg font-bold md:mb-12 md:text-5xl lg:mb-16"> Other Activities </h2>
                <p class="text-sm text-gray-500 max-w-lg">We offer exciting activities designed to provide you with unforgettable experiences. With top-notch service from our professional team, enjoy fun-filled adventures in Bali with the highest level of comfort and care.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Biking Tour -->
                <a href="{{route('rafting')}}">
                <div class="relative bg-gray-100 rounded-lg overflow-hidden h-80 w-full group" data-aos="fade-up" data-aos-delay="100">
                    <img
                        src="images/DSC_0053.jpg"
                        alt=""
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out group-hover:bg-opacity-50"></div>
                    <!-- Overlay -->
                    <div class="relative z-10 flex flex-col justify-end h-full p-8 text-white">
                        <div class="text-xl font-semibold">
                            <h3>Ayung River Rafting</h3>
                        </div>
                        <p class="text-sm">
                            Challenge the rapids of the Ayung River on an exciting rafting journey through the jungle.
                        </p>
                    </div>
                </div>
                </a>

                <!-- Singapadu ATV -->
                <a href="{{ route('atv') }}">
                <div class="relative bg-gray-100 rounded-lg overflow-hidden h-80 w-full group" data-aos="fade-up" data-aos-delay="200">
                    <img
                        src="images/image-1.png"
                        alt=""
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out group-hover:bg-opacity-50"></div>
                    <!-- Overlay -->
                    <div class="relative z-10 flex flex-col justify-end h-full p-8 text-white">
                        <div class="text-xl font-semibold">
                            <h3>Singapadu ATV Adventure</h3>
                        </div>
                        <p class="text-sm">
                            Experience the thrill of off-road adventure through Singapadu’s rugged terrain on an ATV.
                        </p>
                    </div>
                </div>
                </a>

                <!-- FactsCard -->
                <a href="{{route('tubbing')}}">
                <div class="relative bg-gray-100 rounded-lg overflow-hidden h-80 w-full group" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/tubbing.webp" alt="" class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out group-hover:bg-opacity-50"></div>
                    <!-- Overlay -->
                    <div class="relative z-10 flex flex-col justify-end h-full p-8 text-white">
                        <div class="text-xl font-semibold">
                            <h3>Tubbing Adventure Activity</h3>
                        </div>
                        <p class="text-sm">
                            Enjoy a fun-filled tubing adventure down Bali’s serene rivers surrounded by nature.
                        </p>
                    </div>
                </div>
                </a>                

            </div>
            
        </div>
        </section>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-5 py-10">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image.png" alt="" data-aos="fade-up">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-1.png" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-2.png" alt="" data-aos="fade-up" data-aos-delay="200">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-3.png" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-4.png" alt="" data-aos="fade-up" data-aos-delay="400">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-5.png" alt="" data-aos="fade-up" data-aos-delay="500">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-6.png" alt="" data-aos="fade-up" data-aos-delay="600">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-7.png" alt="" data-aos="fade-up" data-aos-delay="700">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-8.png" alt="" data-aos="fade-up" data-aos-delay="800">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-9.png" alt="" data-aos="fade-up" data-aos-delay="900">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-10.png" alt="" data-aos="fade-up" data-aos-delay="1000">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/image-11.png" alt="" data-aos="fade-up" data-aos-delay="1100">
                </div>
            </div>
        </div>
        
        

        <!-- footer -->
        <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-6 gap-y-16 gap-x-12">
                    <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
                        <!-- <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg" alt="" /> -->
                         <h2 class="text-3xl font-bold leading-tight text-gray-900 sm">Ubud Rafting</h2>

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
                                <a href="{{route('about')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> About </a>
                            </li>

                            <li>
                                <a href="{{route('contact')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Contact </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Services</p>

                        <ul class="mt-6 space-y-4">
                            <li>
                                <a href="{{route('rafting')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Rafting </a>
                            </li>

                            <li>
                                <a href="{{route('cycling')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Cycling </a>
                            </li>

                            <li>
                                <a href="{{route('tubbing')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Tubing </a>
                            </li>

                            <li>
                                <a href="{{route('atv')}}" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> ATV </a>
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

                <p class="text-sm text-center text-gray-600">© Copyright 2024, All Rights Reserved by <span><a href="https://instagram.com/scena.project" class="font-bold text-blue-600 hover:underline">Scena Project</a></span> </p>
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