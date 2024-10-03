<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubud Rafting</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/blog.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="css/welcome-gallery.css"> -->
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
                                class="text-base text-black transition-all duration-200 hover:text-opacity-80
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
                <div class="mx-auto max-w-xl px-8 sm:px-6 lg:px-8">
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Tambahkan token CSRF untuk keamanan -->
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-xl font-semibold leading-7 text-gray-900">Create Blog</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                                
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="col-span-full mt-4">
                                        <label for="blog_title" class="block text-sm font-medium leading-6 text-gray-900">Blog Title</label>
                                        <div class="mt-2">
                                            <input type="text" name="blog_title" id="blog_title" required class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    
                                    <div class="col-span-full">
                                        <label for="thumbnail" class="block text-sm font-medium leading-6 text-gray-900">Thumbnail Blog</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10 relative">
                                            <div class="text-center" id="preview-container">
                                                <!-- Default icon before the image is uploaded -->
                                                <svg id="default-icon" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                                </svg>
                                                <!-- Image preview -->
                                                <img id="thumbnail-preview" class="mx-auto hidden h-32 w-32 object-cover rounded-lg" src="" alt="Thumbnail Preview">
                                                
                                                <!-- File name and cancel button -->
                                                <div id="upload-info">
                                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                        <label for="thumbnail" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="thumbnail" name="thumbnail" type="file" class="sr-only" accept="image/png, image/jpeg, image/gif" required>
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                                </div>
                                                <p id="file-name" class="mt-2 text-xs leading-5 text-gray-600"></p>
                                                <button id="cancel-upload" type="button" class="hidden mt-2 text-xs leading-5 text-red-600 underline">Cancel Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="author" class="block text-sm font-medium leading-6 text-gray-900">Author</label>
                                        <div class="mt-2">
                                            <input type="text" name="author" id="author" required class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
            
                                    <div class="sm:col-span-3">
                                        <label for="create_date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                        <div class="mt-2">
                                            <input type="date" name="create_date" id="create_date" required class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="col-span-full mt-4">
                                    <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                                    <div class="mt-2">
                                        <textarea id="content" name="content" rows="3" required class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the blog.</p>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
                                                      
    </body>

    <script>
        const thumbnailInput = document.getElementById('thumbnail');
        const thumbnailPreview = document.getElementById('thumbnail-preview');
        const fileNameDisplay = document.getElementById('file-name');
        const cancelUploadBtn = document.getElementById('cancel-upload');
        const defaultIcon = document.getElementById('default-icon');
        const uploadInfo = document.getElementById('upload-info');
    
        thumbnailInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Show the image preview
                    thumbnailPreview.src = e.target.result;
                    thumbnailPreview.classList.remove('hidden');
                    defaultIcon.classList.add('hidden');
                    fileNameDisplay.textContent = file.name;
                    cancelUploadBtn.classList.remove('hidden');
                    uploadInfo.classList.add('hidden'); // Hide upload instructions
                }
                reader.readAsDataURL(file);
            }
        });
    
        // Cancel upload and reset the form
        cancelUploadBtn.addEventListener('click', function() {
            thumbnailInput.value = '';
            thumbnailPreview.src = '';
            thumbnailPreview.classList.add('hidden');
            defaultIcon.classList.remove('hidden');
            fileNameDisplay.textContent = '';
            cancelUploadBtn.classList.add('hidden');
            uploadInfo.classList.remove('hidden'); // Show upload instructions again
        });
    </script>
</html>