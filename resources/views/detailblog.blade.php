@php
    use Carbon\Carbon;
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubud Rafting</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- <link rel="stylesheet" href="css/welcome-gallery.css"> -->
        <style>
            .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3; /* Limit to 3 lines */
            text-overflow: ellipsis; /* Add ellipsis at the end */
            }
            .toast-message {
            transition: opacity 0.3s ease; /* Smooth transition for fading out */
            }
        </style>
    
    </head>
    <body>
            {{-- <div class="absolute inset-0 bg-black opacity-50"></div> --}}
            <header class="absolute inset-x-0 top-0 z-10 w-full">
                <div class="px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 lg:h-20">
                        <div class="flex-shrink-0">
                            <a href="#" title="" class="flex font-medium pr-10 text-black text-2xl">
                                Ubud Rafting
                            </a>
                        </div>
            
                        <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10">
                            <a href="/" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80 {{ Request::is('/') ? 'font-bold' : 'font-normal' }}">
                                Home
                            </a>
                            <a href="{{route('about')}}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80 {{ Request::is('about') ? 'font-bold' : 'font-normal' }} ">About</a>
                            <a href="{{ route('service') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80 {{ Request::is('service') ? 'font-bold' : 'font-normal' }}">
                                Services
                            </a>
                            <a href="{{route('gallery')}}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80 {{ Request::is('gallery') ? 'font-bold' : 'font-normal' }} ">Gallery</a>
                            <a href="{{ route('blog') }}" title="" class="text-base text-black transition-all duration-200 hover:text-opacity-80 {{ Request::is('blog') ? 'font-bold' : 'font-normal' }} ">Blog</a>
                            <a href="{{ route('contact') }}" title="" class="hidden text-base text-black transition-all duration-200 lg:inline-flex hover:text-opacity-80 {{ Request::is('contact') ? 'font-bold' : 'font-normal'}}">
                                Contact
                            </a>
                        </div>
            
                        <button type="button" id="menu-toggle" class="inline-flex p-2 ml-1 text-black focus:text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 ">
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
        
            <section class="py-24">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <!-- Blog post with featured image -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-3xl mx-auto">
                            <!-- Blog post header -->
                            <div class="py-8">
                                <h1 class="text-3xl font-bold mb-2">{{ $blog->blog_title }}</h1>
                                <p class="text-gray-500 text-sm">Published on <time datetime="2022-04-05">{{ Carbon::parse($blog->create_date)->format('M d, Y') }}</time></p>
                            </div>

                            <!-- Featured image -->
                            <img src="{{ asset('images/blog/' . $blog->thumbnail) }}" alt="Featured image" class="w-full h-auto mb-8 rounded">

                            <!-- Blog post content -->
                            <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                                <p>{{ $blog->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                                                           
    </body>
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