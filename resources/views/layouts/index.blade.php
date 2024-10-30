<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Summernote css 1 js 1 -->
        {{-- <link href="{{ asset('assets/libs/summernote-0.9.0-dist/summernote-lite.min.css') }}" rel="styleseeht" type="text/css" /> --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('css')

    </head>
    <body class="font-sans antialiased">

        {{-- <div class="w-full min-h-screen bg-gray-100 relative">
        </div> --}}

        @include('layouts.navigation')

        <div class="flex mt-16" >
            <div class="w-72 fixed left-0 top-16 bg-white select-none border-r-2 hidden md:block px-2 py-3" >
                <ul class="w-full h-screen list-none font-normal cursor-pointer overflow-y-scroll px-2 sidebars" >
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                            <i class="w-5 fa-solid fa-house text-sm"></i>
                            <h5 class="mx-2" >Home</h5>
                        </a>
                    </li>
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                            <i class="w-5 fa-solid fa-fire text-sm"></i>
                            <h5 class="mx-2" >Popular</h5>
                        </a>
                    </li>
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                            <i class="w-5 fa-solid fa-users text-sm"></i>
                            <h5 class="mx-2" >Explore</h5>
                        </a>
                    </li>
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center  px-4 py-2" >
                            <i class="w-5 fa-solid fa-border-all text-sm"></i>
                            <h5 class="mx-2" >All</h5>
                        </a>
                    </li>
                    <hr class="my-2" />
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex justify-between items-center px-3 py-2" >
                            <span class="uppercase tracking-widest text-gray-500 font-thin text-xs mx-2" >Custom Feeds</span>
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </a>
                    </li>
                    <hr class="my-2" />
                    <li class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg flex justify-between items-center px-3 py-2 " >
                            <span class="uppercase tracking-widest text-gray-500 font-thin text-xs mx-2" >recent</span>
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </a>
                    </li>
                    <hr class="my-2" />
                    <li class="w-full " >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg flex justify-between items-center px-3 py-2" >
                            <span class="uppercase tracking-widest text-gray-500 font-thin text-xs mx-2" >communities</span>
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </a>
                    </li>
                    <hr class="my-2" />
                    <li id="resources" class="w-full" >
                        <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg flex justify-between items-center px-3 py-2" >
                            <span class="uppercase tracking-widest text-gray-500 font-thin text-xs mx-2" >resources</span>
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </a>
                        <ul id="resources-menu" class="w-full h-auto list-none font-normal cursor-pointer text-sm ease-in-out duration-1000" >
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-house text-xs"></i>
                                    <h5 class="mx-2" >about World</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Advertise</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Help</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Blog</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Carees</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Press</h5>
                                </a>
                            </li>
                            <hr/>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Communities</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Best of Reddit</h5>
                                </a>
                            </li>
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Topic</h5>
                                </a>
                            </li>
    
                            <hr/>
    
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Contet Policy</h5>
                                </a>
                            </li>
    
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >Privacy Policy</h5>
                                </a>
                            </li>
    
                            <li class="w-full" >
                                <a href="javascript:void(0);" class="w-full hover:bg-gray-100 rounded-lg  flex items-center px-4 py-2" >
                                    <i class="w-5 fa-solid fa-clapperboard text-xs"></i>
                                    <h5 class="mx-2" >User Agreement</h5>
                                </a>
                            </li>
                            <li class="text-center mt-5 px-2 py-3" >
                                <small class="text-[10px]" >World Inc. 2024.All rights reserved.</small>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            
            <main class="md:ml-72 p-6 w-full">
                @yield('content')
                
                {{-- <div class="container mx-auto">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h1 class="text-2xl font-semibold mb-4">Dynamic Content</h1>
                        <p>This section will contain the dynamic content that changes based on user interaction or routes. You can replace this with components, pages, or data fetched from an API.</p>
                        
                        <!-- Example of dynamic data -->
                        <div class="mt-6">
                            <div class="bg-blue-100 p-4 rounded-lg">Latest Post: "How to Build a Complex Layout with TailwindCSS"</div>
                        </div>
                    </div>
                </div> --}}


            </main>
        </div>

        <!-- Jquery -->
        <script src="{{ asset('assets/libs/jquery/jquery-3.7.1.min.js') }}" type="text/javascript" ></script>

        <!-- summernote css 1 js 1 -->
        {{-- <script src="{{asset('assets/libs/summernote-0.9.0-dist/summernote-lite.min.js')}}" type="text/javascript" ></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>



        @yield('script')
        <script src="{{asset('assets/js/app.js')}}" type="text/javascript" ></script>
    </body>
</html>