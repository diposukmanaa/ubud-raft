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
                                {{ Request::is('/service') ? 'font-bold' : 'font-normal' }}">
                                Services
                            </a>

                            <a
                                href="#"
                                title=""
                                class="text-base text-black transition-all duration-200 hover:text-opacity-80">
                                Gallery
                            </a>
                            <a
                                href="{{ route('blog') }}"
                                title=""
                                class="hidden text-base text-black transition-all duration-200 lg:inline-flex hover:text-opacity-80
                                {{ Request::is('/blog') ? 'font-bold' : 'font-normal' }}">
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
                            class="inline-flex p-2 ml-1 text-black transition-all duration-200 rounded-md sm:ml-4 lg:hidden focus:bg-gray-800 hover:bg-gray-800">
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
        
            <section class="py-24">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h2 class="font-manrope text-4xl font-bold text-gray-900 text-center mb-16">Admin | Blog</h2>

                    <!-- Toast notifications -->
                    <div id="toast-container" class="fixed top-5 right-5 space-y-2 z-50">
                        @if (session('success'))
                            <div class="bg-green-500 text-white p-4 rounded shadow-md toast-message">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="bg-red-500 text-white p-4 rounded shadow-md toast-message">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <div class="grid lg:grid-cols-3 sm:grid-cols-2 m:grid-cols-1 gap-4">
                        @foreach ($blogs as $blog)
                            <div class="group w-full max-lg:max-w-xl lg:w-full border border-gray-300 rounded-2xl relative overflow-hidden">
                                <div class="flex items-center">
                                    <img src="{{ asset('images/blog/' . $blog->thumbnail) }}" alt="blogs tailwind section" class="rounded-t-2xl w-full object-cover" style="height: 200px">
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:bg-black group-hover:opacity-50  transition-opacity duration-300">
                                        <a href="#" class="bg-gray-700 text-white p-2 rounded-full mx-2 px-3">
                                            <i class="fas fa-edit"></i> <!-- Edit Icon -->
                                        </a>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $blog->id }}').submit();" class="bg-red-600 text-white p-2 rounded-full mx-2 px-3">
                                            <i class="fas fa-trash"></i> <!-- Delete Icon -->
                                        </a>
                                        <form id="delete-form-{{ $blog->id }}" action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>                                        
                                    </div>
                                </div>
                                <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                                    <h4 class="text-xl text-gray-900 font-bold leading-8 mb-2">{{ $blog->blog_title }}</h4>
                                    <span class="text-gray-400 font-medium mb-3 block">{{ $blog->author }} | {{ Carbon::parse($blog->create_date)->format('M d, Y') }}</span>
                                    <p class="text-gray-500 leading-6 mb-10 line-clamp-3">{{ $blog->content }}</p>
                                    <a href="javascript:;" class="cursor-pointer text-lg text-indigo-600 font-semibold">Read more..</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>            

            <!-- Bottom-Right Corner -->
            <div class="fixed bottom-4 right-4 py-4">
                <a class=" bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-6 rounded-full shadow-lg" href="{{route('blogs.create')}}">Create New Blog</a>
            </div>                                                
    </body>
    <!-- JavaScript for Toast -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastMessages = document.querySelectorAll('.toast-message');
            toastMessages.forEach(toast => {
                setTimeout(() => {
                    toast.classList.add('opacity-0'); // Add fade out effect
                    setTimeout(() => {
                        toast.remove(); // Remove the element after fade out
                    }, 300); // Match this with the CSS transition duration
                }, 5000); // Show for 5 seconds
            });
        });
    </script>

</html>