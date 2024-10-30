{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>
                            
                                {{ Auth::user()->name }}
                            
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="w-full h-16 text-2xl font-semibold fixed top-0 left-0 z-20 bg-white text-black select-none border-b-2 p-2 " >
    <div class="flex justify-between items-center" >

        <div class="ms-5" >
            <a href="{{ route("dashboard") }}" >
                <h1>World</h1>
            </a>
        </div>
        
        <div class="mx-auto hidden md:block" >
            <div class="w-[350px] bg-gray-100 flex items-center px-3 rounded-full" >
                <i class="fa-solid fa-magnifying-glass text-[17px]"></i>
                <input type="text" name="" id="" class="w-full bg-transparent border-none focus:ring-0" placeholder="Search..." />
            </div>
        </div>
        
        <div class="me-5" >
            <ul class="list-none flex items-center" >
                <li class="hover:bg-slate-200 rounded-full hidden md:flex justify-center items-center px-3 py-2 mx-1" ><a href="javascript:void(0);" class="text-base" ><i class="fas fa-pen"></i></a></li>
                <li class="hover:bg-slate-200 rounded-full hidden md:flex justify-center items-center px-3 py-2  mx-1" ><a href="javascript:void(0);" class="text-base" ><i class="far fa-comment"></i></a></li>
                <li class="hover:bg-slate-200 rounded-full hidden md:flex justify-center items-center px-3 py-2  mx-1" ><a href="{{route('posts.create')}}" class="text-base" ><i class="fas fa-plus"></i><span class="capitalize mx-1" >create</span></a></li>
                <li class="hover:bg-slate-200 rounded-full flex justify-center items-center px-3 py-2  mx-1" ><a href="javascript:void(0);" class="text-base" ><i class="far fa-bell"></i></a></li>
                <li id="profile" class="hover:bg-gray-200 hover:ring ring-blue-300 rounded-full flex justify-center items-center mx-1 relative" >
                    <a href="javascript:void(0);" class="text-base block  w-[35px] h-[35px] bg-gray-300 rounded-full overflow-hidden" >
                        <img class="w-[25px] h-[35px] bg-center bg-cover mx-auto" src="https://i.redd.it/snoovatar/avatars/1be74877-5bfa-41b5-8805-90297e8d8af3.png" />
                    </a>
                    <div id="profile-dropdown" class="w-[210px] md:w-[250px] rounded-xl text-sm font-normal leading-relaxed bg-white shadow-lg overflow-hidden absolute left-[-190px] bottom-[-370px] md:bottom-[-345px] py-3 hidden" >
                        <ul class=" w-ful h-auto list-nonel" >
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="{{ route('profile.show',Auth::user()->id) }}" class="flex items-center" >
                                    <img class="w-[35px] h-[45px] bg-cover" src="https://i.redd.it/snoovatar/avatars/1be74877-5bfa-41b5-8805-90297e8d8af3.png" />
                                    <div class="mx-2" >
                                        <h5 class="m-0" >View Profile</h5>
                                        <h6 class="m-0" >u/ {{ Auth::user()->name }} </h6>
                                    </div>
                                </a>
                            </li>
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="{{ route('profile.edit') }}" class="flex items-center" >
                                    <i class="fa-solid fa-user-pen text-xl"></i>
                                    <h5 class="mx-2" >Edit</h5>
                                </a>
                            </li>
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="javascript:void(0);" class="flex items-center" >
                                    <i class="fa-solid fa-trophy text-xl"></i>
                                    <div class="mx-2" >
                                        <h5 class="m-0" >achievements</h5>
                                        <h6 class="m-0" >4 unlocked</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="javascript:void(0);" class="flex items-center" onclick="document.getElementById('logoutform').submit()" >
                                    <i class="fa-solid fa-right-from-bracket text-xl"></i>
                                    <h5 class="inline-block" >Logout</h5>
                                    <form id="logoutform" action="{{route('logout')}}" method="POST" >
                                        @csrf
                                    </form>
                                </a>
                            </li>
                            <hr/>
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="javascript:void(0);" class="flex items-center" >
                                    <i class="fa-solid fa-gear text-xl"></i>
                                    <h5 class="mx-2" >Settings</h5>
                                </a>
                            </li>
                            <hr/>
                            <li class="w-full hover:bg-gray-100 px-5 py-2" >
                                <a href="javascript:void(0);" class="flex items-center" >
                                    <i class="fa-solid fa-coins text-xl"></i>
                                    <h5 class="mx-2" >Preminum</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                

            </ul>

            

        </div>
    
    </div>
</nav>