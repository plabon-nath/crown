<div>
    <nav x-data="nav"
         class="w-full top-0 fixed shadow-md bg-gray-100 dark:bg-gray-900 bg-opacity-75 dark:bg-opacity-25 backdrop-blur z-10">
        <div class="max-w-7xl mx-auto flex justify-between px-4 relative">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-mark class="block h-9 w-auto leading-loose"></x-application-mark>
                </a>
            </div>

            <!-- SearchBar -->
            <div x-cloak x-show="searchBar" x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-5"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-5"
                 class="bg-white absolute top-0 right-0 w-full flex justify-center items-center space-x-2 px-2 h-12 sm:w-80 sm:top-14 sm:border-2 sm:border-red-400/50 sm:rounded sm:shadow-md z-20">
                <input type="text" placeholder=" Search" x-ref="search" @click.outside="searchBar = false"
                       class="w-full appearance-none border-none bg-transparent py-2 px-3 texy-gray-700 leading-tight focus:outline-none">
                <button @click="searchBar = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile -->
            <div class="sm:hidden flex justify-center items-center">
                <!-- Search Icon -->
                <button @click="searchBar = true; $nextTick(() => $refs.search.focus());">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- Dark Mode Toggle -->
                <button @click="dark()" type="button"
                        class=" text-yellow-500 dark:text-indigo-600 hover:text-indigo-600 dark:hover:text-yellow-500  rounded-lg text-sm mx-4 p-2 flex justify-center items-center ">
                    <svg id="theme-toggle-dark-icon"
                         class="hidden w-5 h-5 rotate-90 hover:rotate-0  transition-all duration-150"
                         fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon"
                         class="hidden w-5 h-5 hover:rotate-90  transition-all duration-150" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Menu Icons -->
                <button class="py-3 ml-3" @click="navOpen=!navOpen">
                    <svg :class="navOpen?'hidden':''" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                    <svg x-cloak :class="navOpen?'':'hidden'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Drawer -->
            <div x-cloak x-show="navOpen" @click.outside="navOpen = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform -translate-x-5"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform translate-x-0"
                 x-transition:leave-end="opacity-0 transform -translate-x-5"
                 class="sm:hidden fixed h-screen overflow-y-auto top-0 left-0 bottom-0 pb-6 w-60 bg-gray-100 dark:bg-gray-900 bg-opacity-75 dark:bg-opacity-80 shadow-lg">


                <div class="h-full flex justify-center items-center flex-col backdrop-filter backdrop-blur ">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-mark class="block h-20 w-auto leading-loose"></x-application-mark>
                        </a>
                    </div>
                    <x-nav-link href="{{__(route('home'))}}" @click="navOpen = false"
                                :active=" request()->routeIs('home')">
                        {{__('Home')}}
                    </x-nav-link>

                    <x-nav-link href="{{ route('menu') }}" @click="navOpen = false"
                                :active=" request()->routeIs('menu')">
                        {{ __('Menu') }}
                    </x-nav-link>
                    <a href="#" @click="active = 'mexican'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'mexican'?'border-b-2 border-indigo-400 text-indigo-400':''">Mexican
                        </h1>
                    </a>
                    <a href="#" @click="active = 'italian'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'italian'?'border-b-2 border-indigo-400 text-indigo-400':''">Italian
                        </h1>
                    </a>
                    <a href="#" @click="active = 'indian'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'indian'?'border-b-2 border-indigo-400 text-indigo-400':''">Indian
                        </h1>
                    </a>
                    <a href="#" @click="active = 'burger'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'burger'?'border-b-2 border-indigo-400 text-indigo-400':''">Burger
                        </h1>
                    </a>
                    <a href="#" @click="active = 'pizza'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'pizza'?'border-b-2 border-indigo-400 text-indigo-400':''">Pizza
                        </h1>
                    </a>
                    <a href="#" @click="active = 'chicken-items'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'chicken-items'?'border-b-2 border-indigo-400 text-indigo-400':''">Chicken
                            Items
                        </h1>
                    </a>
                    <a href="#" @click="active = 'side-orders'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'side-orders'?'border-b-2 border-indigo-400 text-indigo-400':''">Side
                            Orders
                        </h1>
                    </a>


                    <a href="#" @click="active = 'contact'; navOpen = false">
                        <h1 class="p-3 hover:text-indigo-400 transition duration-200"
                            :class="active == 'contact'?'border-b-2 border-indigo-400 text-indigo-400':''">Contact
                        </h1>
                    </a>


                    <!-- Settings Dropdown -->
                    @if( Auth()->user())
                        <div class="ml-3 relative">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                 src="{{ Auth::user()->profile_photo_url }}"
                                                 alt="{{ Auth::user()->name }}"/>
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 leading-4 font-medium rounded-md hover:text-red-400 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif
                                    @if ( Auth()->user()->isAdmin())
                                        <x-jet-dropdown-link href="{{ route('admin.dashboard') }}">
                                            {{ __('Dashboard') }}
                                        </x-jet-dropdown-link>

                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                             @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @else
                        <x-nav-link href="{{ route('login') }}" class="flex justify-center items-center gap-2"
                                    :active="request()->routeIs('login')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-180" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            {{__('Sign up') }}
                        </x-nav-link>
                    @endif


                </div>
            </div>

            <!-- Desktop -->
            <div class="hidden sm:flex justify-evenly items-center space-x-4">


                <!-- Dark Mode Toggle -->
                <button @click="dark()" type="button"
                        class="text-yellow-500 dark:text-indigo-600 hover:text-indigo-600 dark:hover:text-yellow-500  rounded-lg text-sm mx-4 p-2 flex justify-center items-center ">
                    <svg id="theme-toggle-dark-iconLg"
                         class="hidden w-5 h-5 rotate-90 hover:rotate-0 transition-all duration-150" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-iconLg"
                         class="hidden w-5 h-5 hover:rotate-90 transition-all duration-150" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- nav Links -->
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{__('Home')}}
                </x-nav-link>
                <x-nav-link href="{{ route('menu') }}" :active="request()->routeIs('menu')">
                    {{ __('Menu') }}
                </x-nav-link>
                <x-nav-link href="#" :active="request()->routeIs('mexican')">Mexican
                </x-nav-link>
                <x-nav-link href="#" :active="request()->routeIs('italian')">Italian
                </x-nav-link>
                <x-nav-link href="#" :active="request()->routeIs('indian')">Indian
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('contact')">Contact
                </x-nav-link>

                <!-- Settings Dropdown -->
                @if( Auth()->user())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                             src="{{ Auth::user()->profile_photo_url }}"
                                             alt="{{ Auth::user()->name }}"/>
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 leading-4 font-medium rounded-md hover:text-red-400 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if ( Auth()->user()->isAdmin())
                                    <x-jet-dropdown-link href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </x-jet-dropdown-link>

                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @else
                    <x-nav-link href="{{ route('login') }}" class="flex justify-center items-center gap-2"
                                :active="request()->routeIs('login')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-180" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        {{__('Sign up') }}
                    </x-nav-link>
            @endif
            <!-- Nav links End -->
                <!-- Search Button -->
                <button @click="searchBar = true; $nextTick(() => $refs.search.focus());">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-indigo-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

            </div>

        </div>
    </nav>
</div>


<script>
    function nav() {
        return {
            navOpen: false,
            active: "home",
            searchBar: false
        }
    }

    function dropdown() {
        return {
            open: false
        }
    }

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleDarkIconLg = document.getElementById('theme-toggle-dark-iconLg');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    var themeToggleLightIconLg = document.getElementById('theme-toggle-light-iconLg');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
        themeToggleLightIconLg.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
        themeToggleDarkIconLg.classList.remove('hidden');
    }

    function dark() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleDarkIconLg.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');
        themeToggleLightIconLg.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    }
</script>





